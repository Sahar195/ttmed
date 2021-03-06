<?php

namespace App\Entity;

use App\Repository\ConsultationRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ConsultationRepository::class)
 */
class Consultation
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
    private $contenuConsul;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContenuConsul(): ?string
    {
        return $this->contenuConsul;
    }

    public function setContenuConsul(string $contenuConsul): self
    {
        $this->contenuConsul = $contenuConsul;

        return $this;
    }
}
