<?php

namespace App\Repository;

use App\Entity\TestIntexsoft;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TestIntexsoft|null find($id, $lockMode = null, $lockVersion = null)
 * @method TestIntexsoft|null findOneBy(array $criteria, array $orderBy = null)
 * @method TestIntexsoft[]    findAll()
 * @method TestIntexsoft[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TestIntexsoftRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TestIntexsoft::class);
    }

//    /**
//     * @return TestIntexsoft[] Returns an array of TestIntexsoft objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TestIntexsoft
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
