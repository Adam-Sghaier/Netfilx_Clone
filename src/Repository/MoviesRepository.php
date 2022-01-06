<?php

namespace App\Repository;

use App\Entity\Movie;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Movie|null find($id, $lockMode = null, $lockVersion = null)
 * @method Movie|null findOneBy(array $criteria, array $orderBy = null)
 * @method Movie[]    findAll()
 * @method Movie[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MoviesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Movie::class);
    }

    /**
     * @return Movies[] Returns an array of Movies objects
     */
    public function homeFilter($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.category = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'DESC')
            ->setMaxResults(12)
            ->getQuery()
            ->getResult()
        ;
    }

    /**
     * @return Movies[] Returns an array of Movies objects
     */
    public function findByCategoryField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.category = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'DESC')
            ->getQuery()
            ->getResult()
        ;
    }

    /**
     * @return Movies[] Returns an array of Movies objects
     */
    public function recentlyAdd()
    {
        return $this->createQueryBuilder('m')
            ->orderBy('m.id', 'DESC')
            ->getQuery()
            ->setMaxResults(20)
            ->getResult()
        ;
    }

    /**
     * @return Movies[] Returns an array of Movies objects
     */
    public function search($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.title LIKE :val')
            ->setParameter('val', $value.'%')
            ->orderBy('m.title', 'ASC')
            ->getQuery()
            ->getResult()
        ;
    }

    /**
     * @return Movies[] Returns an array of Movies objects
     */
    public function popularFilter()
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.likes > :val')
            ->setParameter('val', 5)
            ->orderBy('m.id', 'DESC')
            ->setMaxResults(12)
            ->getQuery()
            ->getResult()
        ;
    }

    /*
    public function findOneBySomeField($value): ?Movies
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
