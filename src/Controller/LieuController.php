<?php

namespace App\Controller;

use App\Entity\Especepokemon;
use App\Entity\Lieu;
use App\Entity\Pokemon;
use App\Form\CaptureType;
use App\Form\LieuType;
use DateTime;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;


/**
 * @Route("/lieu")
 * @IsGranted("ROLE_USER")
 */
class LieuController extends AbstractController
{
    /**
     * @Route("/", name="lieu_index", methods={"GET"})
     */
    public function index(): Response
    {
        $lieux = $this->getDoctrine()
            ->getRepository(Lieu::class)
            ->findAll();

        return $this->render('lieu/index.html.twig', [
            'lieux' => $lieux,
        ]);
    }

    /**
     * @Route("/new", name="lieu_new", methods={"GET","POST"})
     * @IsGranted("ROLE_ADMIN", message="No access! You are not an admin!")
     * @param Request $request
     * @return Response
     */
    public function new(Request $request): Response
    {
        $lieu = new Lieu();
        $form = $this->createForm(LieuType::class, $lieu);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($lieu);
            $entityManager->flush();

            return $this->redirectToRoute('lieu_index');
        }

        return $this->render('lieu/new.html.twig', [
            'lieu' => $lieu,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="lieu_visit", methods={"GET","POST"})
     * @param Request $request
     * @param Lieu $lieu
     * @return Response
     * @throws Exception
     */
    public function visit(Request $request, Lieu $lieu): Response
    {
        $pokemons = $this->getDoctrine()->getRepository(Pokemon::class)->findBy(array('iddresseur' => $this->getUser()->getId()));

        $leader = array();
        foreach ($pokemons as $poke) {
            if (!$poke->isRecentAction())
                $leader[$poke->getId() . ' - ' . $poke->getIdEspece()->getNom() . ' - ' . $poke->getSurnom()] = $poke;
        }

        $capture = $this->createFormBuilder()
            ->add('leader', ChoiceType::class, array(
                    'choices' => $leader,
                )
            )
            ->getForm();
        $capture->handleRequest($request);

        if ($capture->isSubmitted() && $capture->isValid()) {

            $capture->get('leader')->getData()->setAction(new DateTime('now'));

            $especes = $this->getDoctrine()->getRepository(Especepokemon::class)->findAll();
            $especesBind = array();
            foreach ($especes as $espece) {
                foreach ($lieu->getIdtype() as $idType) {
                    foreach ($espece->getIdtype() as $especeType) {
                        if ($idType == $especeType) {
                            array_push($especesBind, $espece);
                            break 2;
                        }
                    }
                }
            }

            $random = random_int(0, sizeof($especesBind) - 1);

            $caughthPokemon = new Pokemon();
            $caughthPokemon->setIdespece($especesBind[$random]);
            $caughthPokemon->setIddresseur($this->getUser());
            $caughthPokemon->setSurnom('');
            $caughthPokemon->setNiveau(random_int(1, $capture->get('leader')->getData()->getNiveau()));
            $sexe = array('mâle', 'femelle');
            $caughthPokemon->setSexe($sexe[random_int(0, 1)]);

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($caughthPokemon);
            $entityManager->flush();

            return $this->redirectToRoute('home');
        }

        return $this->render('lieu/visit.html.twig', [
            'lieu' => $lieu,
            'capture' => $capture->createView(),
            'empty' => empty($leader),
        ]);
    }

    /**
     * @Route("/{id}/edit", name="lieu_edit", methods={"GET","POST"})
     * @IsGranted("ROLE_ADMIN", message="No access! You are not an admin!")
     * @param Request $request
     * @param Lieu $lieu
     * @return Response
     */
    public function edit(Request $request, Lieu $lieu): Response
    {
        $form = $this->createForm(LieuType::class, $lieu);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('lieu_index');
        }

        return $this->render('lieu/edit.html.twig', [
            'lieu' => $lieu,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="lieu_delete", methods={"DELETE"})
     * @IsGranted("ROLE_ADMIN", message="No access! You are not an admin!")
     * @param Request $request
     * @param Lieu $lieu
     * @return Response
     */
    public function delete(Request $request, Lieu $lieu): Response
    {
        if ($this->isCsrfTokenValid('delete' . $lieu->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($lieu);
            $entityManager->flush();
        }

        return $this->redirectToRoute('lieu_index');
    }
}
