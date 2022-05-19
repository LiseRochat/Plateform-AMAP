<?php

namespace App\Repository;

use App\Entity\Product;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

/**
 * @method Product|null find($id, $lockMode = null, $lockVersion = null)
 * @method Product|null findOneBy(array $criteria, array $orderBy = null)
 * @method Product[]    findAll()
 * @method Product[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Product::class);
    }

    public function getProductByStatus($status){

        //createQuerryBuilder genere une requete qui s'appelle p 
        return $this->createQueryBuilder('p')
        //Condition ou, fonctin pdo
        ->andWhere('p.status = :val')
        ->setParameter('val', $status)
        ->getQuery()
        ->getResult()
    ;

    }

    public function getProductByCategory($category){

        //createQuerryBuilder genere une requete qui s'appelle p 
        return $this->createQueryBuilder('p')
        //Condition ou, fonctin pdo
        ->andWhere('p.category = :val')
        ->setParameter('val', $category)
        ->getQuery()
        ->getResult()
    ;

    }

    public function getProductByBasket($basket){

        //createQuerryBuilder genere une requete qui s'appelle p 
        return $this->createQueryBuilder('p')
        //Condition ou, fonctin pdo
        ->andWhere('p.basket = :val')
        ->setParameter('val', $basket)
        ->getQuery()
        ->getResult()
    ;

    }
    // /**
    //  * @return Product[] Returns an array of Product objects
    //  */
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
    public function countProduct(){
        
    }
   
    public function findOneBySomeField($value): ?Product
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    
}
