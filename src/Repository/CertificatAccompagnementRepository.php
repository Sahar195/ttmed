<?php

namespace App\Repository;

use App\Entity\CertificatAccompagnement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CertificatAccompagnement|null find($id, $lockMode = null, $lockVersion = null)
 * @method CertificatAccompagnement|null findOneBy(array $criteria, array $orderBy = null)
 * @method CertificatAccompagnement[]    findAll()
 * @method CertificatAccompagnement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CertificatAccompagnementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CertificatAccompagnement::class);
    }

    // /**
    //  * @return CertificatAccompagnement[] Returns an array of CertificatAccompagnement objects
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
    public function findOneBySomeField($value): ?CertificatAccompagnement
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
