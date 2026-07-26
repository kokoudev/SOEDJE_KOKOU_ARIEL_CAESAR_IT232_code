<?php

namespace App\Form;

use App\Entity\Defense;
use App\Entity\Room;
use App\Entity\Student;
use App\Entity\Teacher;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DefenseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('student', EntityType::class, [
                'class' => Student::class,
                'choice_label' => function (Student $student) {
                    return $student->getNom() . ' ' . $student->getPrenom() . ' (' . $student->getFiliere() . ')';
                },
                'label' => 'Étudiant concerné',
                'attr' => ['class' => 'form-select']
            ])
            ->add('president', EntityType::class, [
                'class' => Teacher::class,
                'choice_label' => function (Teacher $teacher) {
                    return $teacher->getNom() . ' ' . $teacher->getPrenom();
                },
                'label' => 'Président du Jury',
                'attr' => ['class' => 'form-select']
            ])
            ->add('rapporteur', EntityType::class, [
                'class' => Teacher::class,
                'choice_label' => function (Teacher $teacher) {
                    return $teacher->getNom() . ' ' . $teacher->getPrenom();
                },
                'label' => 'Rapporteur',
                'attr' => ['class' => 'form-select']
            ])
            ->add('examinateur', EntityType::class, [
                'class' => Teacher::class,
                'choice_label' => function (Teacher $teacher) {
                    return $teacher->getNom() . ' ' . $teacher->getPrenom();
                },
                'label' => 'Examinateur',
                'attr' => ['class' => 'form-select']
            ])
            ->add('room', EntityType::class, [
                'class' => Room::class,
                'choice_label' => function (Room $room) {
                    return $room->getCode() . ' (' . $room->getCapacite() . ' places)';
                },
                'label' => 'Salle affectée',
                'attr' => ['class' => 'form-select']
            ])
            ->add('dateDefense', DateType::class, [
                'widget' => 'single_text',
                'label' => 'Date de soutenance',
                'attr' => ['class' => 'form-control']
            ])
            ->add('timeDefense', TimeType::class, [
                'widget' => 'single_text',
                'label' => 'Heure de soutenance',
                'attr' => ['class' => 'form-control']
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Defense::class,
        ]);
    }
}
