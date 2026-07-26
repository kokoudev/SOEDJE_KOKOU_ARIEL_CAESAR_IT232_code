<?php

namespace App\DataFixtures;

use App\Entity\Defense;
use App\Entity\Room;
use App\Entity\Student;
use App\Entity\Teacher;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    public function __construct(private UserPasswordHasherInterface $passwordHasher)
    {
    }

    public function load(ObjectManager $manager): void
    {
        // 1. Admin User
        $admin = new User();
        $admin->setEmail('admin@univ.edu');
        $admin->setNom('ADMINISTRATEUR');
        $admin->setPrenom('Système');
        $admin->setRoles(['ROLE_ADMIN']);
        $admin->setPassword($this->passwordHasher->hashPassword($admin, 'admin123'));
        $manager->persist($admin);

        // 2. Teachers
        $teacher1 = new Teacher();
        $teacher1->setNom('ADJAYI');
        $teacher1->setPrenom('Kofi');
        $teacher1->setEmail('k.adjayi@univ.edu');
        $teacher1->setSpecialite('Génie Logiciel & Architecture Web');

        $userTeacher1 = new User();
        $userTeacher1->setEmail('k.adjayi@univ.edu');
        $userTeacher1->setNom('ADJAYI');
        $userTeacher1->setPrenom('Kofi');
        $userTeacher1->setRoles(['ROLE_TEACHER']);
        $userTeacher1->setPassword($this->passwordHasher->hashPassword($userTeacher1, 'teacher123'));
        $teacher1->setUserTarget($userTeacher1);

        $manager->persist($teacher1);
        $manager->persist($userTeacher1);

        $teacher2 = new Teacher();
        $teacher2->setNom('LAWSON');
        $teacher2->setPrenom('Béatrice');
        $teacher2->setEmail('b.lawson@univ.edu');
        $teacher2->setSpecialite('Intelligence Artificielle & Data Science');

        $userTeacher2 = new User();
        $userTeacher2->setEmail('b.lawson@univ.edu');
        $userTeacher2->setNom('LAWSON');
        $userTeacher2->setPrenom('Béatrice');
        $userTeacher2->setRoles(['ROLE_TEACHER']);
        $userTeacher2->setPassword($this->passwordHasher->hashPassword($userTeacher2, 'teacher123'));
        $teacher2->setUserTarget($userTeacher2);

        $manager->persist($teacher2);
        $manager->persist($userTeacher2);

        $teacher3 = new Teacher();
        $teacher3->setNom('SOW');
        $teacher3->setPrenom('Ousmane');
        $teacher3->setEmail('o.sow@univ.edu');
        $teacher3->setSpecialite('Sécurité Informatique & Systèmes');
        $manager->persist($teacher3);

        // 3. Students
        $student1 = new Student();
        $student1->setNom('KOUASSI');
        $student1->setPrenom('Jean-Marc');
        $student1->setEmail('j.kouassi@student.univ.edu');
        $student1->setFiliere('Informatique & Génie Logiciel');
        $student1->setTheme('Mise en place d’une plateforme cloud de microservices');
        $manager->persist($student1);

        $student2 = new Student();
        $student2->setNom('MENSAH');
        $student2->setPrenom('Sophie');
        $student2->setEmail('s.mensah@student.univ.edu');
        $student2->setFiliere('Sécurité Réseaux');
        $student2->setTheme('Détection d’intrusions par apprentissage automatique');
        $manager->persist($student2);

        // 4. Rooms
        $room1 = new Room();
        $room1->setCode('SALLE-A101');
        $room1->setCapacite(45);
        $room1->setLocalisation('Bloc Académique 1 - RDC');
        $manager->persist($room1);

        $room2 = new Room();
        $room2->setCode('AMPHI-B');
        $room2->setCapacite(150);
        $room2->setLocalisation('Bâtiment Central - 1er Étage');
        $manager->persist($room2);

        // 5. Defense
        $defense1 = new Defense();
        $defense1->setStudent($student1);
        $defense1->setPresident($teacher1);
        $defense1->setRapporteur($teacher2);
        $defense1->setExaminateur($teacher3);
        $defense1->setRoom($room1);
        $defense1->setDateDefense(new \DateTime('2026-07-28'));
        $defense1->setTimeDefense(new \DateTime('09:00:00'));
        $manager->persist($defense1);

        $manager->flush();
    }
}
