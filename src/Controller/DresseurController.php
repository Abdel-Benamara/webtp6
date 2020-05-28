<?php

namespace App\Controller;

use App\Entity\Dresseur;
use App\Form\DresseurType;
use App\Repository\DresseurRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

/**
 * @Route("/dresseur")
 * @IsGranted("ROLE_USER")
 */
class DresseurController extends AbstractController
{
    /**
     * @Route("/", name="dresseur_index", methods={"GET"})
     * @IsGranted("ROLE_ADMIN", message="No access! You are not an admin!")
     * @param DresseurRepository $dresseurRepository
     * @return Response
     */
    public function index(DresseurRepository $dresseurRepository): Response
    {
        return $this->render('dresseur/index.html.twig', [
            'dresseurs' => $dresseurRepository->findAll(),
        ]);
    }

    /**
     * @Route("/{id}", name="dresseur_show", methods={"GET"})
     * @param Dresseur $dresseur
     * @return Response
     */
    public function show(Dresseur $dresseur): Response
    {
        return $this->render('dresseur/show.html.twig', [
            'dresseur' => $dresseur,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="dresseur_edit", methods={"GET","POST"})
     * @param Request $request
     * @param Dresseur $dresseur
     * @return Response
     */
    public function edit(Request $request, Dresseur $dresseur): Response
    {
        if ($this->getUser()->getId() != $request->get('id') and sizeof($this->getUser()->getRoles()) == 1) {
            return $this->redirectToRoute('home');
        }

        $form = $this->createForm(DresseurType::class, $dresseur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('dresseur_index');
        }

        return $this->render('dresseur/edit.html.twig', [
            'dresseur' => $dresseur,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="dresseur_delete", methods={"DELETE"})
     * @IsGranted("ROLE_ADMIN", message="No access! You are not an admin!")
     * @param Request $request
     * @param Dresseur $dresseur
     * @return Response
     */
    public function delete(Request $request, Dresseur $dresseur): Response
    {
        if ($this->isCsrfTokenValid('delete'.$dresseur->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($dresseur);
            $entityManager->flush();
        }

        return $this->redirectToRoute('dresseur_index');
    }
}
