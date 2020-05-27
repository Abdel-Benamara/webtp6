<?php

namespace App\Controller;

use App\Entity\Pokemon;
use App\Form\PokemonType;
use App\Repository\DresseurRepository;
use App\Repository\PokemonRepository;
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
     * @param DresseurRepository $dresseurRepository
     * @return Response
     * @throws \Doctrine\DBAL\DBALException
     */
    public function index(DresseurRepository $dresseurRepository): Response
    {
        $idDresseur = $this->getUser()->getId();

        // $pokemon = $this->getDoctrine()
        //     ->getRepository(Pokemon::class)
        //     ->findAll();

        $pokemon = $dresseurRepository->getListPokemon($idDresseur);

        return $this->render('pokemon/index.html.twig', [
            'pokemon' => $pokemon,
        ]);
    }

    /**
     * @Route("/new", name="pokemon_new", methods={"GET","POST"})
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
     * @param PokemonRepository $pokemonRepository
     * @return Response
     * @throws \Doctrine\DBAL\DBALException
     */
    public function show(Pokemon $pokemon, PokemonRepository $pokemonRepository): Response
    {
        $espece = $pokemonRepository->getEspece($pokemon->getId());

        $type = $pokemonRepository->getType($pokemon->getId());

        return $this->render('pokemon/show.html.twig', [
            'pokemon' => $pokemon,
            'espece' => $espece,
            'type' => $type,
        ]);
    }

    /**
     * @Route("/{id}/training", name="pokemon_training", methods={"GET"})
     * @param Pokemon $pokemon
     * @param PokemonRepository $pokemonRepository
     * @param DresseurRepository $dresseurRepository
     * @return Response
     * @throws \Doctrine\DBAL\DBALException
     */
    public function training(Pokemon $pokemon, PokemonRepository $pokemonRepository, DresseurRepository $dresseurRepository): Response
    {
        $pokemon->getTrained($pokemonRepository);
        
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->flush();

        return $this->index($dresseurRepository);
    }

    /**
     * @Route("/{id}/edit", name="pokemon_edit", methods={"GET","POST"})
     * @param Request $request
     * @param Pokemon $pokemon
     * @return Response
     */
    public function edit(Request $request, Pokemon $pokemon): Response
    {
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
     * @Route("/{id}", name="pokemon_delete", methods={"DELETE"})
     * @param Request $request
     * @param Pokemon $pokemon
     * @return Response
     */
    public function delete(Request $request, Pokemon $pokemon): Response
    {
        if ($this->isCsrfTokenValid('delete'.$pokemon->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($pokemon);
            $entityManager->flush();
        }

        return $this->redirectToRoute('pokemon_index');
    }
}
