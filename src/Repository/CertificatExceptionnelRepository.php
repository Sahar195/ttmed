<?php

namespace App\Repository;

use App\Entity\CertificatExceptionnel;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CertificatExceptionnel|null find($id, $lockMode = null, $lockVersion = null)
 * @method CertificatExceptionnel|null findOneBy(array $criteria, array $orderBy = null)
 * @method CertificatExceptionnel[]    findAll()
 * @method CertificatExceptionnel[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CertificatExceptionnelRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CertificatExceptionnel::class);
    }

    // /**
    //  * @return CertificatExceptionnel[] Returns an array of CertificatExceptionnel objects
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
    public function findOneBySomeField($value): ?CertificatExceptionnel
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
