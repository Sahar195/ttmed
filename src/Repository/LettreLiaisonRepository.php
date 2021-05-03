<?php

namespace App\Repository;

use App\Entity\LettreLiaison;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method LettreLiaison|null find($id, $lockMode = null, $lockVersion = null)
 * @method LettreLiaison|null findOneBy(array $criteria, array $orderBy = null)
 * @method LettreLiaison[]    findAll()
 * @method LettreLiaison[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LettreLiaisonRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LettreLiaison::class);
    }

    // /**
    //  * @return LettreLiaison[] Returns an array of LettreLiaison objects
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
    public function findOneBySomeField($value): ?LettreLiaison
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
