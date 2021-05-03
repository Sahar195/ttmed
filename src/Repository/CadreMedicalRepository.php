<?php

namespace App\Repository;

use App\Entity\CadreMedical;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CadreMedical|null find($id, $lockMode = null, $lockVersion = null)
 * @method CadreMedical|null findOneBy(array $criteria, array $orderBy = null)
 * @method CadreMedical[]    findAll()
 * @method CadreMedical[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CadreMedicalRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CadreMedical::class);
    }

    // /**
    //  * @return CadreMedical[] Returns an array of CadreMedical objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CadreMedical
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
