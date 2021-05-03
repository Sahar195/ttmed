<?php

namespace App\Entity;

use App\Repository\AgentRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AgentRepository::class)
 */
class Agent
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $carteId;

    /**
     * @ORM\Column(type="string", length=30, unique=true)
     */
    private $situation;

    /**
     * @ORM\Column(type="string", length=40, nullable=true)
     */
    private $niveauEtude;

    /**
     * @ORM\Column(type="string", length=40)
     */
    private $poste;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $dateRecrutement;

    /**
     * @ORM\Column(type="date")
     */
    private $residence;

    /**
     * @ORM\Column(type="integer")
     */
    private $contact1;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $contact2;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCarteId(): ?int
    {
        return $this->carteId;
    }

    public function setCarteId(int $carteId): self
    {
        $this->carteId = $carteId;

        return $this;
    }

    public function getSituation(): ?string
    {
        return $this->situation;
    }

    public function setSituation(string $situation): self
    {
        $this->situation = $situation;

        return $this;
    }

    public function getNiveauEtude(): ?string
    {
        return $this->niveauEtude;
    }

    public function setNiveauEtude(?string $niveauEtude): self
    {
        $this->niveauEtude = $niveauEtude;

        return $this;
    }

    public function getPoste(): ?string
    {
        return $this->poste;
    }

    public function setPoste(string $poste): self
    {
        $this->poste = $poste;

        return $this;
    }

    public function getDateRecrutement(): ?date
    {
        return $this->dateRecrutement;
    }

    public function setDateRecrutement(string $dateRecrutement): self
    {
        $this->dateRecrutement = $dateRecrutement;

        return $this;
    }

    public function getResidence(): ?string
    {
        return $this->residence;
    }

    public function setResidence(string $residence): self
    {
        $this->residence = $residence;

        return $this;
    }

    public function getContact1(): ?int
    {
        return $this->contact1;
    }

    public function setContact1(int $contact1): self
    {
        $this->contact1 = $contact1;

        return $this;
    }

    public function getContact2(): ?int
    {
        return $this->contact2;
    }

    public function setContact2(?int $contact2): self
    {
        $this->contact2 = $contact2;

        return $this;
    }
}
