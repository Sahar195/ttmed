<?php

namespace App\Entity;

use App\Repository\LettreLiaisonRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LettreLiaisonRepository::class)
 */
class LettreLiaison
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
    private $contenuLettre;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContenuLettre(): ?string
    {
        return $this->contenuLettre;
    }

    public function setContenuLettre(string $contenuLettre): self
    {
        $this->contenuLettre = $contenuLettre;

        return $this;
    }
}
