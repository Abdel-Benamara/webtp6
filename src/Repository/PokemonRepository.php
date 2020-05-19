<?php


namespace App\Repository;


use App\Entity\Pokemon;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use PDO;

/**
 * Class PokemonRepository
 */
class PokemonRepository extends ServiceEntityRepository
{
    /**
     * PokemonRepository constructor.
     * @param ManagerRegistry $registry
     */
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Pokemon::class);
    }

    /**
     * @param $idPokemon
     * @return mixed[]
     * @throws \Doctrine\DBAL\DBALException
     */
    public function getEspece($idPokemon){
        $conn = $this->getEntityManager()->getConnection();
        $sql = 'SELECT e.nom, e.courbeXP, e.evolution FROM pokemon AS p, especePokemon AS e WHERE p.idEspece = e.id AND p.id = :num';

        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':num', $idPokemon, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch();
    }

    /**
     * @param $idPokemon
     * @return mixed[]
     * @throws \Doctrine\DBAL\DBALException
     */
    public function getType($idPokemon){
        $conn = $this->getEntityManager()->getConnection();
        $sql = 'SELECT t.type FROM typePokemon AS t, bindPokeType AS b, pokemon AS p, especePokemon AS e WHERE p.idEspece = e.id AND e.id = b.idPokemon AND b.idType = t.id AND p.id = :num';

        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':num', $idPokemon, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}