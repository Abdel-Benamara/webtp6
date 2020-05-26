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

    /**
     * @param $pokemon
     * @throws \Doctrine\DBAL\DBALException
     */
    public function getTrained($pokemon){
        $idPokemon = $pokemon->getId();
        $espece = $this->getEspece($idPokemon);
        $lvl = $pokemon->getNiveau();
        $oldXp = $pokemon->getXp();
        $results = random_int(10, 30) + $oldXp;

        switch ($espece['courbeXP']){
            case 'R':
                $exp = 0.8 * (pow($lvl, 3));
                while ($results > $exp){
                    $lvl = $lvl + 1;
                    $results = $results - $exp;
                    $exp = 0.8 * (pow($lvl, 3));
                }
                break;
            case 'M':
                $exp = pow($lvl, 3);
                while ($results > $exp){
                    $lvl = $lvl + 1;
                    $results = $results - $exp;
                    $exp = pow($lvl, 3);
                }
                break;
            case 'P':
                $exp = 1.2 * (pow($lvl, 3)) - 15 * (pow($lvl, 2)) + 100 * $lvl - 140;
                while ($results > $exp){
                    $lvl = $lvl + 1;
                    $results = $results - $exp;
                    $exp = 1.2 * (pow($lvl, 3)) - 15 * (pow($lvl, 2)) + 100 * $lvl - 140;
                }
                break;
            case 'L':
                $exp = 1.25 * (pow($lvl, 3));
                while ($results > $exp){
                    $lvl = $lvl + 1;
                    $results = $results - $exp;
                    $exp = 1.25 * (pow($lvl, 3));
                }
                break;
        }
        $results = round($results, 0, PHP_ROUND_HALF_UP);

        $conn = $this->getEntityManager()->getConnection();
        $sql = 'UPDATE pokemon SET niveau = :lvl, xp = :xp WHERE id = :id';

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':lvl', $lvl, PDO::PARAM_INT);
        $stmt->bindParam(':xp', $results, PDO::PARAM_INT);
        $stmt->bindParam(':id', $idPokemon, PDO::PARAM_INT);
        $stmt->execute();
    }
}