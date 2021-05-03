<?php

namespace App\Repository;

use App\Entity\AdmininRH;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method AdmininRH|null find($id, $lockMode = null, $lockVersion = null)
 * @method AdmininRH|null findOneBy(array $criteria, array $orderBy = null)
 * @method AdmininRH[]    findAll()
 * @method AdmininRH[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AdmininRHRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AdmininRH::class);
    }

    // /**
    //  * @return AdmininRH[] Returns an array of AdmininRH objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?AdmininRH
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
