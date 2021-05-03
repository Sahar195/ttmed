<?php

namespace App\Repository;

use App\Entity\DonneesCardioVasculaires;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DonneesCardioVasculaires|null find($id, $lockMode = null, $lockVersion = null)
 * @method DonneesCardioVasculaires|null findOneBy(array $criteria, array $orderBy = null)
 * @method DonneesCardioVasculaires[]    findAll()
 * @method DonneesCardioVasculaires[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DonneesCardioVasculairesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DonneesCardioVasculaires::class);
    }

    // /**
    //  * @return DonneesCardioVasculaires[] Returns an array of DonneesCardioVasculaires objects
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
    public function findOneBySomeField($value): ?DonneesCardioVasculaires
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
