<?php

namespace App\Entity;

use App\Repository\CertificatAccompagnementRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CertificatAccompagnementRepository::class)
 */
class CertificatAccompagnement
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
    private $contenuAccom;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContenuAccom(): ?string
    {
        return $this->contenuAccom;
    }

    public function setContenuAccom(string $contenuAccom): self
    {
        $this->contenuAccom = $contenuAccom;

        return $this;
    }
}
