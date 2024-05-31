<?php

namespace App\Entity;

use App\Repository\ExperienceRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ExperienceRepository::class)]
class Experience
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $dateD = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateF = null;

    #[ORM\Column(length: 255)]
    private ?string $nomEtablissement = null;

    #[ORM\Column(length: 255)]
    private ?string $villeEtablissement = null;

    #[ORM\Column(length: 255)]
    private ?string $nomPoste = null;

    #[ORM\Column(length: 255)]
    private ?string $mission = null;

    #[ORM\Column]
    private ?bool $responsable = null;

    #[ORM\ManyToOne(inversedBy: 'experiences')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Category $category = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateD(): ?\DateTimeInterface
    {
        return $this->dateD;
    }

    public function setDateD(\DateTimeInterface $dateD): static
    {
        $this->dateD = $dateD;

        return $this;
    }

    public function getDateF(): ?\DateTimeInterface
    {
        return $this->dateF;
    }

    public function setDateF(?\DateTimeInterface $dateF): static
    {
        $this->dateF = $dateF;

        return $this;
    }

    public function getNomEtablissement(): ?string
    {
        return $this->nomEtablissement;
    }

    public function setNomEtablissement(string $nomEtablissement): static
    {
        $this->nomEtablissement = $nomEtablissement;

        return $this;
    }

    public function getVilleEtablissement(): ?string
    {
        return $this->villeEtablissement;
    }

    public function setVilleEtablissement(string $villeEtablissement): static
    {
        $this->villeEtablissement = $villeEtablissement;

        return $this;
    }

    public function getNomPoste(): ?string
    {
        return $this->nomPoste;
    }

    public function setNomPoste(string $nomPoste): static
    {
        $this->nomPoste = $nomPoste;

        return $this;
    }

    public function getMission(): ?string
    {
        return $this->mission;
    }

    public function setMission(string $mission): static
    {
        $this->mission = $mission;

        return $this;
    }

    public function isResponsable(): ?bool
    {
        return $this->responsable;
    }

    public function setResponsable(bool $responsable): static
    {
        $this->responsable = $responsable;

        return $this;
    }

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category): static
    {
        $this->category = $category;

        return $this;
    }
    public function __toString(): string 
    {
        return $this->getNomPoste();
    }
}
