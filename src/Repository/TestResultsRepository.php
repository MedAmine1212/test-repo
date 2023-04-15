<?php

namespace App\Repository;

use App\Entity\TestResults;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TestResults>
 *
 * @method TestResults|null find($id, $lockMode = null, $lockVersion = null)
 * @method TestResults|null findOneBy(array $criteria, array $orderBy = null)
 * @method TestResults[]    findAll()
 * @method TestResults[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TestResultsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TestResults::class);
    }

    public function save(TestResults $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(TestResults $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return TestResults[] Returns an array of TestResults objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('t.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?TestResults
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }

    // public function insertScore($score,$user,$test)
    //   {  
    //     $entityManager = $this->getEntityManager();
    //     $query = $entityManager
    //     ->createQuery('INSERT INTO App\Entity\TestResults r 
    //     (r.users, r.tests, mark) VALUES (:user, :test, :score)
    //     ')
    //     ->setParameter('users', $user)
    //     ->setParameter('tests', $test)
    //     ->setParameter('user', $score);

    //     return $query->execute();
    // }

    
    public function getUserResult($userId,$testId): array
    { 
        $entityManager = $this->getEntityManager();

        $query = $entityManager
        ->createQuery('SELECT r FROM App\Entity\TestResults r  
        WHERE r.users = :userId AND  r.tests = :testId ')
        ->setParameter('userId', $userId)
        ->setParameter('testId', $testId);

        return $query->getResult();
    }


}
