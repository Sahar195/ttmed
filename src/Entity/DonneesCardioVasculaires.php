<?php

namespace App\Entity;

use App\Repository\DonneesCardioVasculairesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DonneesCardioVasculairesRepository::class)
 */
class DonneesCardioVasculaires
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $pouls;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $tension;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPouls(): ?float
    {
        return $this->pouls;
    }

    public function setPouls(?float $pouls): self
    {
        $this->pouls = $pouls;

        return $this;
    }

    public function getTension(): ?float
    {
        return $this->tension;
    }

    public function setTension(?float $tension): self
    {
        $this->tension = $tension;

        return $this;
    }
}
