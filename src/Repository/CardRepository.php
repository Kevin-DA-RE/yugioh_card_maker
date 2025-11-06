<?php

namespace App\Repository;

use App\Entity\Archetype;
use App\Entity\Atk;
use App\Entity\Card;
use App\Entity\Def;
use App\Entity\FrameType;
use App\Entity\Level;
use App\Entity\Race;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Card>
 */
class CardRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Card::class);

        /**
         * @return Card[] Returns an array of Card objects
         */

    }
    public function showCard(): array
    {
        return $this->createQueryBuilder('c')
        ->select(array(
            'c.id_card',
            'c.name',
            'c.typeline as attributs',
            'c.description',
            'c.image_url',
            'c.image_url_small',
            'c.image_url_cropped',
            'a.number as attaque',
            'd.number as defense',
            'r.name as race',
            'arc.name as structure',
            'f.name as type',
            'l.number as level'))
            ->join(Atk::class, 'a', 'WITH', 'c.atk = a.id')
            ->join(Def::class, 'd', 'WITH', 'c.def = d.id')
            ->join(Race::class, 'r', 'WITH', 'c.race = r.id')
            ->join(Archetype::class, 'arc', 'WITH', 'c.archetype = arc.id')
            ->join(FrameType::class, 'f', 'WITH', 'c.frametype = f.id')
            ->join(Level::class, 'l', 'WITH', 'c.level = l.id')
            ->getQuery()
            ->getResult()
        ;
    }
    //    /**
    //     * @return Card[] Returns an array of Card objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('c')
    //            ->andWhere('c.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('c.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Card
    //    {
    //        return $this->createQueryBuilder('c')
    //            ->andWhere('c.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
