<?php

namespace App\Repository;

use App\Entity\PlaceJob;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method PlaceJob|null find($id, $lockMode = null, $lockVersion = null)
 * @method PlaceJob|null findOneBy(array $criteria, array $orderBy = null)
 * @method PlaceJob[]    findAll()
 * @method PlaceJob[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PlaceJobRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, PlaceJob::class);
    }

//    /**
//     * @return PlaceJob[] Returns an array of PlaceJob objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?PlaceJob
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
