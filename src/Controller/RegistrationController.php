<?php

namespace App\Controller;

use App\Entity\Dresseur;
use App\Entity\Especepokemon;
use App\Entity\Pokemon;
use App\Form\RegistrationFormType;
use App\Security\DresseurAuthenticator;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Guard\GuardAuthenticatorHandler;

class RegistrationController extends AbstractController
{
    /**
     * @Route("/register", name="app_register")
     * @param Request $request
     * @param UserPasswordEncoderInterface $passwordEncoder
     * @param GuardAuthenticatorHandler $guardHandler
     * @param DresseurAuthenticator $authenticator
     * @return Response
     * @throws Exception
     */
    public function register(Request $request, UserPasswordEncoderInterface $passwordEncoder, GuardAuthenticatorHandler $guardHandler, DresseurAuthenticator $authenticator): Response
    {
        if ($this->getUser()) {
            return $this->redirectToRoute('home');
        }

        $user = new Dresseur();
        $user->setMoney(5000);
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // encode the plain password
            $user->setPassword(
                $passwordEncoder->encodePassword(
                    $user,
                    $form->get('plainPassword')->getData()
                )
            );

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            // do anything else you need here, like send an email

            $espece = $this->getDoctrine()->getRepository(Especepokemon::class)->findBy(array('id' => $form->get('starter')->getData()));
            $dresseur = $this->getDoctrine()->getRepository(Dresseur::class)->findBy(array('id' => $user->getId()));

            $pokemon = new Pokemon();
            $pokemon->setIdespece($espece[0]);
            $pokemon->setIddresseur($dresseur[0]);
            $pokemon->setSurnom($form->get('surnom')->getData());
            $pokemon->setNiveau(1);
            $sexe = array('mâle', 'femelle');
            $pokemon->setSexe($sexe[random_int(0, 1)]);

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($pokemon);
            $entityManager->flush();

            return $guardHandler->authenticateUserAndHandleSuccess(
                $user,
                $request,
                $authenticator,
                'main' // firewall name in security.yaml
            );
        }

        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }
}
