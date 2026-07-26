<?php

namespace App\Controller;

use App\Entity\User;

use App\Repository\DefenseRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/enseignant')]
class TeacherDashboardController extends AbstractController
{
    #[Route('/dashboard', name: 'teacher_dashboard')]
    public function index(DefenseRepository $defenseRepository): Response
    {
        /** @var User $user */
        $user = $this->getUser();
        $teacher = $user->getTeacher();

        if (!$teacher) {
            $myDefenses = [];
        } else {
            $myDefenses = $defenseRepository->createQueryBuilder('d')
                ->where('d.president = :t OR d.rapporteur = :t OR d.examinateur = :t')
                ->setParameter('t', $teacher)
                ->orderBy('d.dateDefense', 'ASC')
                ->getQuery()
                ->getResult();
        }

        return $this->render('teacher_space/dashboard.html.twig', [
            'teacher' => $teacher,
            'defenses' => $myDefenses,
        ]);
    }

    #[Route('/defenses', name: 'teacher_defenses')]
    public function defenses(DefenseRepository $defenseRepository): Response
    {
        /** @var User $user */
        $user = $this->getUser();
        $teacher = $user->getTeacher();

        if (!$teacher) {
            $myDefenses = [];
        } else {
            $myDefenses = $defenseRepository->createQueryBuilder('d')
                ->where('d.president = :t OR d.rapporteur = :t OR d.examinateur = :t')
                ->setParameter('t', $teacher)
                ->orderBy('d.dateDefense', 'ASC')
                ->getQuery()
                ->getResult();
        }

        return $this->render('teacher_space/defenses.html.twig', [
            'teacher' => $teacher,
            'defenses' => $myDefenses,
        ]);
    }

    #[Route('/jurys', name: 'teacher_jurys')]
    public function jurys(DefenseRepository $defenseRepository): Response
    {
        /** @var User $user */
        $user = $this->getUser();
        $teacher = $user->getTeacher();

        if (!$teacher) {
            $myDefenses = [];
        } else {
            $myDefenses = $defenseRepository->createQueryBuilder('d')
                ->where('d.president = :t OR d.rapporteur = :t OR d.examinateur = :t')
                ->setParameter('t', $teacher)
                ->orderBy('d.dateDefense', 'ASC')
                ->getQuery()
                ->getResult();
        }

        return $this->render('teacher_space/jurys.html.twig', [
            'teacher' => $teacher,
            'defenses' => $myDefenses,
        ]);
    }
}
