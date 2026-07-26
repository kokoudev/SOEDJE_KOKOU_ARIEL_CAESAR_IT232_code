<?php

namespace App\Controller;

use App\Entity\Defense;
use App\Form\DefenseType;
use App\Repository\DefenseRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/defenses')]
class DefenseController extends AbstractController
{
    #[Route('/', name: 'admin_defense_index', methods: ['GET'])]
    public function index(DefenseRepository $defenseRepository, Request $request): Response
    {
        $dateFilter = $request->query->get('date');
        if ($dateFilter) {
            $defenses = $defenseRepository->findBy(['dateDefense' => new \DateTime($dateFilter)], ['timeDefense' => 'ASC']);
        } else {
            $defenses = $defenseRepository->findBy([], ['dateDefense' => 'ASC', 'timeDefense' => 'ASC']);
        }

        return $this->render('defense/index.html.twig', [
            'defenses' => $defenses,
            'dateFilter' => $dateFilter,
        ]);
    }

    #[Route('/new', name: 'admin_defense_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, DefenseRepository $defenseRepository): Response
    {
        $defense = new Defense();
        $form = $this->createForm(DefenseType::class, $defense);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $pres = $defense->getPresident();
            $rap = $defense->getRapporteur();
            $exa = $defense->getExaminateur();

            // Rule 1: Jury members must be distinct
            if ($pres->getId() === $rap->getId() || $pres->getId() === $exa->getId() || $rap->getId() === $exa->getId()) {
                $form->addError(new FormError('Le président, le rapporteur et l\'examinateur doivent être des enseignants distincts.'));
            }

            // Rule 2: Anti-room conflict at same time
            if ($defenseRepository->hasRoomConflict($defense->getRoom(), $defense->getDateDefense(), $defense->getTimeDefense())) {
                $form->addError(new FormError('Cette salle est déjà réservée pour une autre soutenance au même créneau horaire.'));
            }

            // Rule 3: Anti-teacher conflict at same time
            foreach ([$pres, $rap, $exa] as $teacher) {
                if ($defenseRepository->hasTeacherConflict($teacher, $defense->getDateDefense(), $defense->getTimeDefense())) {
                    $form->addError(new FormError(sprintf('L\'enseignant %s %s participe déjà à une autre soutenance au même créneau.', $teacher->getNom(), $teacher->getPrenom())));
                }
            }

            if ($form->getErrors(true)->count() === 0) {
                $entityManager->persist($defense);
                $entityManager->flush();

                $this->addFlash('success', 'La soutenance a été programmée avec succès.');
                return $this->redirectToRoute('admin_defense_index');
            }
        }

        return $this->render('defense/new.html.twig', [
            'defense' => $defense,
            'form' => $form,
        ]);
    }

    #[Route('/{id}/edit', name: 'admin_defense_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Defense $defense, EntityManagerInterface $entityManager, DefenseRepository $defenseRepository): Response
    {
        $form = $this->createForm(DefenseType::class, $defense);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $pres = $defense->getPresident();
            $rap = $defense->getRapporteur();
            $exa = $defense->getExaminateur();

            if ($pres->getId() === $rap->getId() || $pres->getId() === $exa->getId() || $rap->getId() === $exa->getId()) {
                $form->addError(new FormError('Le président, le rapporteur et l\'examinateur doivent être des enseignants distincts.'));
            }

            if ($defenseRepository->hasRoomConflict($defense->getRoom(), $defense->getDateDefense(), $defense->getTimeDefense(), $defense->getId())) {
                $form->addError(new FormError('Cette salle est déjà réservée pour une autre soutenance au même créneau horaire.'));
            }

            foreach ([$pres, $rap, $exa] as $teacher) {
                if ($defenseRepository->hasTeacherConflict($teacher, $defense->getDateDefense(), $defense->getTimeDefense(), $defense->getId())) {
                    $form->addError(new FormError(sprintf('L\'enseignant %s %s participe déjà à une autre soutenance au même créneau.', $teacher->getNom(), $teacher->getPrenom())));
                }
            }

            if ($form->getErrors(true)->count() === 0) {
                $entityManager->flush();

                $this->addFlash('success', 'La soutenance a été modifiée.');
                return $this->redirectToRoute('admin_defense_index');
            }
        }

        return $this->render('defense/edit.html.twig', [
            'defense' => $defense,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'admin_defense_delete', methods: ['POST'])]
    public function delete(Request $request, Defense $defense, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $defense->getId(), $request->request->get('_token'))) {
            $entityManager->remove($defense);
            $entityManager->flush();
            $this->addFlash('success', 'La soutenance a été annulée.');
        }

        return $this->redirectToRoute('admin_defense_index');
    }
}
