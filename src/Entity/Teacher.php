<?php

namespace App\Entity;

use App\Repository\TeacherRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: TeacherRepository::class)]
#[UniqueEntity(fields: ['email'], message: 'Cette adresse email est déjà enregistrée.')]
class Teacher
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    #[Assert\NotBlank(message: 'Le nom est obligatoire.')]
    private ?string $nom = null;

    #[ORM\Column(length: 100)]
    #[Assert\NotBlank(message: 'Le prénom est obligatoire.')]
    private ?string $prenom = null;

    #[ORM\Column(length: 180, unique: true)]
    #[Assert\NotBlank(message: 'L\'adresse email est obligatoire.')]
    #[Assert\Email(message: 'L\'email renseigné est invalide.')]
    private ?string $email = null;

    #[ORM\Column(length: 150)]
    #[Assert\NotBlank(message: 'La spécialité est obligatoire.')]
    private ?string $specialite = null;

    #[ORM\OneToOne(inversedBy: 'teacher', cascade: ['persist', 'remove'])]
    private ?User $userTarget = null;

    #[ORM\OneToMany(mappedBy: 'president', targetEntity: Defense::class)]
    private Collection $presidedDefenses;

    #[ORM\OneToMany(mappedBy: 'rapporteur', targetEntity: Defense::class)]
    private Collection $reportedDefenses;

    #[ORM\OneToMany(mappedBy: 'examinateur', targetEntity: Defense::class)]
    private Collection $examinedDefenses;

    public function __construct()
    {
        $this->presidedDefenses = new ArrayCollection();
        $this->reportedDefenses = new ArrayCollection();
        $this->examinedDefenses = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;
        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): static
    {
        $this->prenom = $prenom;
        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;
        return $this;
    }

    public function getSpecialite(): ?string
    {
        return $this->specialite;
    }

    public function setSpecialite(string $specialite): static
    {
        $this->specialite = $specialite;
        return $this;
    }

    public function getUserTarget(): ?User
    {
        return $this->userTarget;
    }

    public function setUserTarget(?User $userTarget): static
    {
        $this->userTarget = $userTarget;
        return $this;
    }

    public function getPresidedDefenses(): Collection
    {
        return $this->presidedDefenses;
    }

    public function getReportedDefenses(): Collection
    {
        return $this->reportedDefenses;
    }

    public function getExaminedDefenses(): Collection
    {
        return $this->examinedDefenses;
    }
}
