<?php

namespace App\Entity;

use App\Repository\OrdonnanceRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=OrdonnanceRepository::class)
 */
class Ordonnance
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $contenuOrd;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContenuOrd(): ?string
    {
        return $this->contenuOrd;
    }

    public function setContenuOrd(string $contenuOrd): self
    {
        $this->contenuOrd = $contenuOrd;

        return $this;
    }
}
