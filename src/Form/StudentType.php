<?php

namespace App\Form;

use App\Entity\Student;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class StudentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'label' => 'Nom de l\'étudiant',
                'attr' => ['class' => 'form-control', 'placeholder' => 'ex: KOUASSI']
            ])
            ->add('prenom', TextType::class, [
                'label' => 'Prénom',
                'attr' => ['class' => 'form-control', 'placeholder' => 'ex: Jean-Marc']
            ])
            ->add('email', EmailType::class, [
                'label' => 'Adresse Email (Unique)',
                'attr' => ['class' => 'form-control', 'placeholder' => 'etudiant@univ.edu']
            ])
            ->add('filiere', TextType::class, [
                'label' => 'Filière d\'études',
                'attr' => ['class' => 'form-control', 'placeholder' => 'ex: Génie Logiciel']
            ])
            ->add('theme', TextareaType::class, [
                'label' => 'Thème du mémoire',
                'attr' => ['class' => 'form-control', 'rows' => 3, 'placeholder' => 'Intitulé exact du mémoire...']
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Student::class,
        ]);
    }
}
