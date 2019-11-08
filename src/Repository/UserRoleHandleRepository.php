<?php

namespace App\Repository;

use App\Entity\UserRoleHandle;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method UserRoleHandle|null find($id, $lockMode = null, $lockVersion = null)
 * @method UserRoleHandle|null findOneBy(array $criteria, array $orderBy = null)
 * @method UserRoleHandle[]    findAll()
 * @method UserRoleHandle[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserRoleHandleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UserRoleHandle::class);
    }

    // /**
    //  * @return UserRoleHandle[] Returns an array of UserRoleHandle objects
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
    public function findOneBySomeField($value): ?UserRoleHandle
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
