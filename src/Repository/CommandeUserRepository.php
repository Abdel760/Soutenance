<?php

namespace App\Repository;

use App\Entity\CommandeUser;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method CommandeUser|null find($id, $lockMode = null, $lockVersion = null)
 * @method CommandeUser|null findOneBy(array $criteria, array $orderBy = null)
 * @method CommandeUser[]    findAll()
 * @method CommandeUser[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CommandeUserRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, CommandeUser::class);
    }

//    /**
//     * @return CommandeUser[] Returns an array of CommandeUser objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CommandeUser
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
