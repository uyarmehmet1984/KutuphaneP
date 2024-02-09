<?php

namespace App\Repository;

use App\Entity\Borrowedbook;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Borrowedbook>
 *
 * @method Borrowedbook|null find($id, $lockMode = null, $lockVersion = null)
 * @method Borrowedbook|null findOneBy(array $criteria, array $orderBy = null)
 * @method Borrowedbook[]    findAll()
 * @method Borrowedbook[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BorrowedbookRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Borrowedbook::class);
    }

//    /**
//     * @return Borrowedbook[] Returns an array of Borrowedbook objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('b.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Borrowedbook
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
