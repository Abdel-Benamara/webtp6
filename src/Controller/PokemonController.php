<?php

namespace App\Controller;

use App\Entity\Dresseur;
use App\Entity\Pokemon;
use App\Form\PokemonType;
use App\Form\SellPokemonType;
use App\Repository\PokemonRepository;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

/**
 * @Route("/pokemon")
 * @IsGranted("ROLE_USER")
 */
class PokemonController extends AbstractController
{
    /**
     * @Route("/", name="pokemon_index", methods={"GET"})
     * @return Response
     */
    public function index(): Response
    {
        $idDresseur = $this->getUser()->getId();

        $pokemons = $this->getDoctrine()->getRepository(Pokemon::class)->findBy(array('iddresseur' => $idDresseur));

        return $this->render('pokemon/index.html.twig', [
            'pokemons' => $pokemons,
        ]);
    }

    /**
     * @Route("/new", name="pokemon_new", methods={"GET","POST"})
     * @IsGranted("ROLE_ADMIN", message="No access! You are not an admin!")
     * @param Request $request
     * @return Response
     */
    public function new(Request $request): Response
    {
        $pokemon = new Pokemon();
        $form = $this->createForm(PokemonType::class, $pokemon);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($pokemon);
            $entityManager->flush();

            return $this->redirectToRoute('pokemon_index');
        }

        return $this->render('pokemon/new.html.twig', [
            'pokemon' => $pokemon,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="pokemon_show", methods={"GET"})
     * @param Pokemon $pokemon
     * @return Response
     */
    public function show(Pokemon $pokemon): Response
    {
        if (!$pokemon->isToSell() and $this->getUser()->getId() != $pokemon->getIddresseur()->getId()) {
            $admin = false;
            foreach ($this->getUser()->getRoles() as $role)
                if ($role == "ROLE_ADMIN")
                    $admin = true;
            if (!$admin)
                return $this->redirectToRoute('home');
        }

        return $this->render('pokemon/show.html.twig', [
            'pokemon' => $pokemon,
        ]);
    }

    /**
     * @Route("/{id}/training", name="pokemon_training", methods={"GET"})
     * @param Pokemon $pokemon
     * @param PokemonRepository $pokemonRepository
     * @return Response
     * @throws Exception
     */
    public function training(Pokemon $pokemon, PokemonRepository $pokemonRepository): Response
    {
        if ($this->getUser()->getId() != $pokemon->getIddresseur()->getId()) {
            $admin = false;
            foreach ($this->getUser()->getRoles() as $role)
                if ($role == "ROLE_ADMIN")
                    $admin = true;
            if (!$admin)
                return $this->redirectToRoute('home');
        }

        $pokemon->getTrained($pokemonRepository);
        
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->flush();

        return $this->index();
    }

    /**
     * @Route("/{id}/edit", name="pokemon_edit", methods={"GET","POST"})
     * @param Request $request
     * @param Pokemon $pokemon
     * @return Response
     */
    public function edit(Request $request, Pokemon $pokemon): Response
    {
        if ($this->getUser()->getId() != $pokemon->getIddresseur()->getId()) {
            $admin = false;
            foreach ($this->getUser()->getRoles() as $role)
                if ($role == "ROLE_ADMIN")
                    $admin = true;
                if (!$admin)
                    return $this->redirectToRoute('home');
        }

        $form = $this->createForm(PokemonType::class, $pokemon);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('pokemon_index');
        }

        return $this->render('pokemon/edit.html.twig', [
            'pokemon' => $pokemon,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}/sell", name="pokemon_sell", methods={"GET","POST"})
     * @param Request $request
     * @param Pokemon $pokemon
     * @return Response
     */
    public function sell(Request $request, Pokemon $pokemon): Response
    {
        if ($this->getUser()->getId() != $pokemon->getIddresseur()->getId()) {
            $admin = false;
            foreach ($this->getUser()->getRoles() as $role)
                if ($role == "ROLE_ADMIN")
                    $admin = true;
            if (!$admin)
                return $this->redirectToRoute('home');
        }

        $form = $this->createForm(SellPokemonType::class, $pokemon);
        $form->handleRequest($request);

        $pokemon->setToSell(true);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('pokemon_index');
        }

        return $this->render('pokemon/sell.html.twig', [
            'pokemon' => $pokemon,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("//shop", name="pokemon_shop", methods={"GET"})
     * @return Response
     */
    public function shop(): Response
    {
        $pokemons = $this->getDoctrine()->getRepository(Pokemon::class)->findBy(array('toSell' => true));

        $results = array();
        foreach ($pokemons as $poke) {
            if ($poke->getIddresseur()->getId() != $this->getUser()->getId())
                array_push($results, $poke);
        }

        return $this->render('pokemon/shop.html.twig', [
            'pokemons' => $results,
        ]);
    }

    /**
     * @Route("/{id}/buy", name="pokemon_buy", methods={"GET"})
     * @param Pokemon $pokemon
     * @return Response
     */
    public function buy(Pokemon $pokemon): Response
    {
        if ($this->getUser()->getMoney() < $pokemon->getPrix()) {
            return $this->redirectToRoute('home');
        }

        $seller = $this->getDoctrine()->getRepository(Dresseur::class)->findBy(array('id' => $pokemon->getIddresseur()->getId()));
        $seller[0]->setMoney($seller[0]->getMoney() + $pokemon->getPrix());
        $this->getUser()->setMoney($this->getUser()->getMoney() - $pokemon->getPrix());

        $pokemon->setToSell(false);
        $pokemon->setPrix(0);
        $pokemon->setIddresseur($this->getUser());

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->flush();

        return $this->index();
    }

    /**
     * @Route("/{id}", name="pokemon_delete", methods={"DELETE"})
     * @param Request $request
     * @param Pokemon $pokemon
     * @return Response
     */
    public function delete(Request $request, Pokemon $pokemon): Response
    {
        if ($this->getUser()->getId() != $pokemon->getIddresseur()->getId()) {
            $admin = false;
            foreach ($this->getUser()->getRoles() as $role)
                if ($role == "ROLE_ADMIN")
                    $admin = true;
            if (!$admin)
                return $this->redirectToRoute('home');
        }

        if ($this->isCsrfTokenValid('delete'.$pokemon->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($pokemon);
            $entityManager->flush();
        }

        return $this->redirectToRoute('pokemon_index');
    }
}
