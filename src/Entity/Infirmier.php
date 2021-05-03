<?php

namespace App\Entity;

use App\Repository\InfirmierRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=InfirmierRepository::class)
 */
class Infirmier
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
    private $matriculeInf;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMatriculeInf(): ?int
    {
        return $this->matriculeInf;
    }

    public function setMatriculeInf(int $matriculeInf): self
    {
        $this->matriculeInf = $matriculeInf;

        return $this;
    }
}
