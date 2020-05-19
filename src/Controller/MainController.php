<?php

namespace App\Controller;

use App\Repository\DresseurRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="home")
     * @IsGranted("ROLE_USER")
     * @param DresseurRepository $dresseurRepository
     * @return \Symfony\Component\HttpFoundation\Response
     * @throws \Doctrine\DBAL\DBALException
     */
    public function index(DresseurRepository $dresseurRepository)
    {
        $idDresseur = $this->getUser()->getId();

        $money = $dresseurRepository->getMoney($idDresseur);
        $pokemons = $dresseurRepository->getListPokemon($idDresseur);
        $total = sizeof($pokemons);
        $nbEvo = $dresseurRepository->getNbEvo($idDresseur);
        $stats = $dresseurRepository->getStatsByType($idDresseur);

        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
            'money' => $money,
            'total' => $total,
            'stats' => $stats,
            'nbEvo' => $nbEvo
        ]);
    }
}
