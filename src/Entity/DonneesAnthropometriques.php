<?php

namespace App\Entity;

use App\Repository\DonneesAnthropometriquesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DonneesAnthropometriquesRepository::class)
 */
class DonneesAnthropometriques
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="float")
     */
    private $poids;

    /**
     * @ORM\Column(type="float")
     */
    private $taille;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $visionPreDroite;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $visionPreGauche;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $visionLoinDroite;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $auditionDroite;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $auditionGauche;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPoids(): ?float
    {
        return $this->poids;
    }

    public function setPoids(float $poids): self
    {
        $this->poids = $poids;

        return $this;
    }

    public function getTaille(): ?float
    {
        return $this->taille;
    }

    public function setTaille(float $taille): self
    {
        $this->taille = $taille;

        return $this;
    }

    public function getVisionPreDroite(): ?float
    {
        return $this->visionPreDroite;
    }

    public function setVisionPreDroite(?float $visionPreDroite): self
    {
        $this->visionPreDroite = $visionPreDroite;

        return $this;
    }

    public function getVisionPreGauche(): ?float
    {
        return $this->visionPreGauche;
    }

    public function setVisionPreGauche(?float $visionPreGauche): self
    {
        $this->visionPreGauche = $visionPreGauche;

        return $this;
    }

    public function getVisionLoinDroite(): ?float
    {
        return $this->visionLoinDroite;
    }

    public function setVisionLoinDroite(?float $visionLoinDroite): self
    {
        $this->visionLoinDroite = $visionLoinDroite;

        return $this;
    }

    public function getAuditionDroite(): ?float
    {
        return $this->auditionDroite;
    }

    public function setAuditionDroite(?float $auditionDroite): self
    {
        $this->auditionDroite = $auditionDroite;

        return $this;
    }

    public function getAuditionGauche(): ?float
    {
        return $this->auditionGauche;
    }

    public function setAuditionGauche(?float $auditionGauche): self
    {
        $this->auditionGauche = $auditionGauche;

        return $this;
    }
}
