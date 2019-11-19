<?php

namespace App\Repository;

use App\Entity\Squares;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Squares|null find($id, $lockMode = null, $lockVersion = null)
 * @method Squares|null findOneBy(array $criteria, array $orderBy = null)
 * @method Squares[]    findAll()
 * @method Squares[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SquaresRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Squares::class);
    }

    // /**
    //  * @return Squares[] Returns an array of Squares objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Squares
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
