<?php

namespace App\Repository;

use App\Entity\AdminRH;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method AdminRH|null find($id, $lockMode = null, $lockVersion = null)
 * @method AdminRH|null findOneBy(array $criteria, array $orderBy = null)
 * @method AdminRH[]    findAll()
 * @method AdminRH[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AdminRHRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AdminRH::class);
    }

    // /**
    //  * @return AdminRH[] Returns an array of AdminRH objects
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
    public function findOneBySomeField($value): ?AdminRH
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
