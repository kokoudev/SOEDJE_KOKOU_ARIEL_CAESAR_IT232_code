<?php

namespace App\Controller;

use App\Entity\Student;
use App\Form\StudentType;
use App\Repository\StudentRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/students')]
class StudentController extends AbstractController
{
    #[Route('/', name: 'admin_student_index', methods: ['GET'])]
    public function index(StudentRepository $studentRepository, Request $request): Response
    {
        $search = $request->query->get('q');
        if ($search) {
            $students = $studentRepository->searchByName($search);
        } else {
            $students = $studentRepository->findBy([], ['nom' => 'ASC']);
        }

        return $this->render('student/index.html.twig', [
            'students' => $students,
            'search' => $search,
        ]);
    }

    #[Route('/new', name: 'admin_student_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $student = new Student();
        $form = $this->createForm(StudentType::class, $student);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($student);
            $entityManager->flush();

            $this->addFlash('success', 'L\'étudiant a été ajouté avec succès.');
            return $this->redirectToRoute('admin_student_index');
        }

        return $this->render('student/new.html.twig', [
            'student' => $student,
            'form' => $form,
        ]);
    }

    #[Route('/{id}/edit', name: 'admin_student_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Student $student, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(StudentType::class, $student);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            $this->addFlash('success', 'Les informations de l\'étudiant ont été mises à jour.');
            return $this->redirectToRoute('admin_student_index');
        }

        return $this->render('student/edit.html.twig', [
            'student' => $student,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'admin_student_delete', methods: ['POST'])]
    public function delete(Request $request, Student $student, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $student->getId(), $request->request->get('_token'))) {
            $entityManager->remove($student);
            $entityManager->flush();
            $this->addFlash('success', 'Étudiant supprimé avec succès.');
        }

        return $this->redirectToRoute('admin_student_index');
    }
}
