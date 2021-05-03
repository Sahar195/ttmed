<?php

namespace App\Entity;

use App\Repository\MedecinRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MedecinRepository::class)
 */
class Medecin
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $cinMed;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCinMed(): ?int
    {
        return $this->cinMed;
    }

    public function setCinMed(int $cinMed): self
    {
        $this->cinMed = $cinMed;

        return $this;
    }
}
