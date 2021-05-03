<?php

namespace App\Entity;

use App\Repository\CertificatExceptionnelRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CertificatExceptionnelRepository::class)
 */
class CertificatExceptionnel
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
    private $contenuExcep;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContenuExcep(): ?string
    {
        return $this->contenuExcep;
    }

    public function setContenuExcep(string $contenuExcep): self
    {
        $this->contenuExcep = $contenuExcep;

        return $this;
    }
}
