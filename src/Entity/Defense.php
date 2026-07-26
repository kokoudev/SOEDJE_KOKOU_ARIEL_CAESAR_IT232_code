<?php

namespace App\Entity;

use App\Repository\DefenseRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: DefenseRepository::class)]
#[UniqueEntity(fields: ['student'], message: 'Cet étudiant possède déjà une soutenance programmée.')]
class Defense
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\OneToOne(inversedBy: 'defense', targetEntity: Student::class)]
    #[ORM\JoinColumn(nullable: false)]
    #[Assert\NotNull(message: 'L\'étudiant est obligatoire.')]
    private ?Student $student = null;

    #[ORM\ManyToOne(targetEntity: Teacher::class, inversedBy: 'presidedDefenses')]
    #[ORM\JoinColumn(nullable: false)]
    #[Assert\NotNull(message: 'Le président du jury est obligatoire.')]
    private ?Teacher $president = null;

    #[ORM\ManyToOne(targetEntity: Teacher::class, inversedBy: 'reportedDefenses')]
    #[ORM\JoinColumn(nullable: false)]
    #[Assert\NotNull(message: 'Le rapporteur est obligatoire.')]
    private ?Teacher $rapporteur = null;

    #[ORM\ManyToOne(targetEntity: Teacher::class, inversedBy: 'examinedDefenses')]
    #[ORM\JoinColumn(nullable: false)]
    #[Assert\NotNull(message: 'L\'examinateur est obligatoire.')]
    private ?Teacher $examinateur = null;

    #[ORM\ManyToOne(targetEntity: Room::class, inversedBy: 'defenses')]
    #[ORM\JoinColumn(nullable: false)]
    #[Assert\NotNull(message: 'La salle est obligatoire.')]
    private ?Room $room = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\NotNull(message: 'La date de soutenance est obligatoire.')]
    private ?\DateTimeInterface $dateDefense = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    #[Assert\NotNull(message: 'L\'heure de soutenance est obligatoire.')]
    private ?\DateTimeInterface $timeDefense = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStudent(): ?Student
    {
        return $this->student;
    }

    public function setStudent(?Student $student): static
    {
        $this->student = $student;
        return $this;
    }

    public function getPresident(): ?Teacher
    {
        return $this->president;
    }

    public function setPresident(?Teacher $president): static
    {
        $this->president = $president;
        return $this;
    }

    public function getRapporteur(): ?Teacher
    {
        return $this->rapporteur;
    }

    public function setRapporteur(?Teacher $rapporteur): static
    {
        $this->rapporteur = $rapporteur;
        return $this;
    }

    public function getExaminateur(): ?Teacher
    {
        return $this->examinateur;
    }

    public function setExaminateur(?Teacher $examinateur): static
    {
        $this->examinateur = $examinateur;
        return $this;
    }

    public function getRoom(): ?Room
    {
        return $this->room;
    }

    public function setRoom(?Room $room): static
    {
        $this->room = $room;
        return $this;
    }

    public function getDateDefense(): ?\DateTimeInterface
    {
        return $this->dateDefense;
    }

    public function setDateDefense(\DateTimeInterface $dateDefense): static
    {
        $this->dateDefense = $dateDefense;
        return $this;
    }

    public function getTimeDefense(): ?\DateTimeInterface
    {
        return $this->timeDefense;
    }

    public function setTimeDefense(\DateTimeInterface $timeDefense): static
    {
        $this->timeDefense = $timeDefense;
        return $this;
    }
}
