<?php

namespace App\Repository;

use App\Entity\HostedPBXUser;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method HostedPBXUser|null find($id, $lockMode = null, $lockVersion = null)
 * @method HostedPBXUser|null findOneBy(array $criteria, array $orderBy = null)
 * @method HostedPBXUser[]    findAll()
 * @method HostedPBXUser[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HostedPBXUserRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, HostedPBXUser::class);
    }

    // /**
    //  * @return HostedPBXUser[] Returns an array of HostedPBXUser objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('h.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?HostedPBXUser
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
