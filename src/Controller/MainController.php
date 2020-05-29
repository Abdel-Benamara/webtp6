<?php

namespace App\Controller;

use App\Entity\Pokemon;
use App\Repository\DresseurRepository;
use Doctrine\DBAL\DBALException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="home")
     * @IsGranted("ROLE_USER")
     * @param DresseurRepository $dresseurRepository
     * @return Response
     * @throws DBALException
     */
    public function index(DresseurRepository $dresseurRepository)
    {
        $idDresseur = $this->getUser()->getId();
        $pokemons = $this->getDoctrine()->getRepository(Pokemon::class)->findBy(array('iddresseur' => $idDresseur));

        $total = sizeof($pokemons);

        $stats = $dresseurRepository->getStatsByType($idDresseur);

        $nbEvo = 0;
        foreach ($pokemons as $poke)
            if ($poke->getIdEspece()->getEvolution() == 'o')
                $nbEvo++;

        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
            'dresseur' => $this->getUser(),
            'total' => $total,
            'stats' => $stats,
            'nbEvo' => $nbEvo
        ]);
    }

}
