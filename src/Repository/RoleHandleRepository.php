<?php

namespace App\Repository;

use App\Entity\RoleHandle;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method RoleHandle|null find($id, $lockMode = null, $lockVersion = null)
 * @method RoleHandle|null findOneBy(array $criteria, array $orderBy = null)
 * @method RoleHandle[]    findAll()
 * @method RoleHandle[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RoleHandleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RoleHandle::class);
    }

    // /**
    //  * @return RoleHandle[] Returns an array of RoleHandle objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?RoleHandle
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
