<?php

namespace App\Repository;

use App\Entity\Defense;
use App\Entity\Room;
use App\Entity\Teacher;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Defense>
 */
class DefenseRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Defense::class);
    }

    public function hasRoomConflict(Room $room, \DateTimeInterface $date, \DateTimeInterface $time, ?int $excludeId = null): bool
    {
        $qb = $this->createQueryBuilder('d')
            ->select('COUNT(d.id)')
            ->where('d.room = :room')
            ->andWhere('d.dateDefense = :date')
            ->andWhere('d.timeDefense = :time')
            ->setParameter('room', $room)
            ->setParameter('date', $date->format('Y-m-d'))
            ->setParameter('time', $time->format('H:i:s'));

        if ($excludeId !== null) {
            $qb->andWhere('d.id != :excludeId')
               ->setParameter('excludeId', $excludeId);
        }

        return (int) $qb->getQuery()->getSingleScalarResult() > 0;
    }

    public function hasTeacherConflict(Teacher $teacher, \DateTimeInterface $date, \DateTimeInterface $time, ?int $excludeId = null): bool
    {
        $qb = $this->createQueryBuilder('d')
            ->select('COUNT(d.id)')
            ->where('d.dateDefense = :date')
            ->andWhere('d.timeDefense = :time')
            ->andWhere('(d.president = :teacher OR d.rapporteur = :teacher OR d.examinateur = :teacher)')
            ->setParameter('teacher', $teacher)
            ->setParameter('date', $date->format('Y-m-d'))
            ->setParameter('time', $time->format('H:i:s'));

        if ($excludeId !== null) {
            $qb->andWhere('d.id != :excludeId')
               ->setParameter('excludeId', $excludeId);
        }

        return (int) $qb->getQuery()->getSingleScalarResult() > 0;
    }
}
