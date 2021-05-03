<?php

namespace App\Repository;

use App\Entity\DonneesAnthropometriques;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DonneesAnthropometriques|null find($id, $lockMode = null, $lockVersion = null)
 * @method DonneesAnthropometriques|null findOneBy(array $criteria, array $orderBy = null)
 * @method DonneesAnthropometriques[]    findAll()
 * @method DonneesAnthropometriques[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DonneesAnthropometriquesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DonneesAnthropometriques::class);
    }

    // /**
    //  * @return DonneesAnthropometriques[] Returns an array of DonneesAnthropometriques objects
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
    public function findOneBySomeField($value): ?DonneesAnthropometriques
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
