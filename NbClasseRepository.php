<?php

namespace App\Repository;

use App\Entity\NbClasse;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<NbClasse>
 *
 * @method NbClasse|null find($id, $lockMode = null, $lockVersion = null)
 * @method NbClasse|null findOneBy(array $criteria, array $orderBy = null)
 * @method NbClasse[]    findAll()
 * @method NbClasse[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NbClasseRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, NbClasse::class);
    }

//    /**
//     * @return NbClasse[] Returns an array of NbClasse objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('n')
//            ->andWhere('n.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('n.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?NbClasse
//    {
//        return $this->createQueryBuilder('n')
//            ->andWhere('n.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
