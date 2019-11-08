<?php

namespace App\Repository;

use App\Entity\UserHandle;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method UserHandle|null find($id, $lockMode = null, $lockVersion = null)
 * @method UserHandle|null findOneBy(array $criteria, array $orderBy = null)
 * @method UserHandle[]    findAll()
 * @method UserHandle[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserHandleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UserHandle::class);
    }

    // /**
    //  * @return UserHandle[] Returns an array of UserHandle objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?UserHandle
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
