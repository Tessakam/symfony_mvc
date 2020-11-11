<?php

namespace App\Repository;

use App\Entity\LoggedIn;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method LoggedIn|null find($id, $lockMode = null, $lockVersion = null)
 * @method LoggedIn|null findOneBy(array $criteria, array $orderBy = null)
 * @method LoggedIn[]    findAll()
 * @method LoggedIn[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LoggedInRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LoggedIn::class);
    }

    // /**
    //  * @return LoggedIn[] Returns an array of LoggedIn objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?LoggedIn
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
