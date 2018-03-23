<?php

namespace App\Repository;

use App\Entity\ProducteurProduit;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ProducteurProduit|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProducteurProduit|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProducteurProduit[]    findAll()
 * @method ProducteurProduit[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProducteurProduitRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ProducteurProduit::class);
    }

//    /**
//     * @return ProducteurProduit[] Returns an array of ProducteurProduit objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ProducteurProduit
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
