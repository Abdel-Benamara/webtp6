<?php

namespace App\Repository;

use App\Entity\Dresseur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\DBAL\DBALException;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;
use PDO;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\User\PasswordUpgraderInterface;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @method Dresseur|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dresseur|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dresseur[]    findAll()
 * @method Dresseur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DresseurRepository extends ServiceEntityRepository implements PasswordUpgraderInterface
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Dresseur::class);
    }

    /**
     * Used to upgrade (rehash) the user's password automatically over time.
     * @param UserInterface $user
     * @param string $newEncodedPassword
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function upgradePassword(UserInterface $user, string $newEncodedPassword): void
    {
        if (!$user instanceof Dresseur) {
            throw new UnsupportedUserException(sprintf('Instances of "%s" are not supported.', \get_class($user)));
        }

        $user->setPassword($newEncodedPassword);
        $this->_em->persist($user);
        $this->_em->flush();
    }

    /**
     * @param $idDresseur
     * @return mixed[]
     * @throws DBALException
     */
    public function getStatsByType($idDresseur){
        $conn = $this->getEntityManager()->getConnection();
        $sql = 'SELECT t.type, COUNT(b.idType) AS nb FROM typePokemon AS t, bindPokeType AS b, pokemon AS p, especePokemon AS e, dresseur AS d WHERE p.idEspece = e.id AND e.id = b.idPokemon AND b.idType = t.id AND p.idDresseur = d.id AND d.id = :num GROUP BY t.type';

        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':num', $idDresseur, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    /**
     * @param $idDresseur
     * @return mixed[] Returns an array of PokemonType objects
     * @throws DBALException
     */
    public function getNbEvo($idDresseur){
        $conn = $this->getEntityManager()->getConnection();
        $sql = 'SELECT COUNT(p.id) AS nbEvo FROM pokemon AS p, especePokemon AS e, dresseur AS d WHERE d.id = :num AND d.id = p.idDresseur AND p.idEspece = e.id AND e.evolution = \'o\'';

        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':num', $idDresseur, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch()['nbEvo'];
    }

    // /**
    //  * @return Dresseur[] Returns an array of Dresseur objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Dresseur
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
