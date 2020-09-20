<?php

namespace App\Repository;

use App\Entity\BTW;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method BTW|null find($id, $lockMode = null, $lockVersion = null)
 * @method BTW|null findOneBy(array $criteria, array $orderBy = null)
 * @method BTW[]    findAll()
 * @method BTW[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BTWRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BTW::class);
    }

    // /**
    //  * @return BTW[] Returns an array of BTW objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?BTW
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
