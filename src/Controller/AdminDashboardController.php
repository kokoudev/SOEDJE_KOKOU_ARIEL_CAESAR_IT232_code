<?php

namespace App\Controller;

use App\Repository\DefenseRepository;
use App\Repository\RoomRepository;
use App\Repository\StudentRepository;
use App\Repository\TeacherRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminDashboardController extends AbstractController
{
    #[Route('/admin/dashboard', name: 'admin_dashboard')]
    public function index(
        StudentRepository $studentRepository,
        TeacherRepository $teacherRepository,
        RoomRepository $roomRepository,
        DefenseRepository $defenseRepository
    ): Response {
        $totalStudents = $studentRepository->count([]);
        $totalTeachers = $teacherRepository->count([]);
        $totalRooms = $roomRepository->count([]);
        $totalDefenses = $defenseRepository->count([]);

        $latestDefenses = $defenseRepository->findBy([], ['id' => 'DESC'], 5);

        return $this->render('admin/dashboard.html.twig', [
            'totalStudents' => $totalStudents,
            'totalTeachers' => $totalTeachers,
            'totalRooms' => $totalRooms,
            'totalDefenses' => $totalDefenses,
            'latestDefenses' => $latestDefenses,
        ]);
    }
}
