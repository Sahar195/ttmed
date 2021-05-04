<?php

namespace App\Entity;

use App\Repository\AdminRHRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AdminRHRepository::class)
 */
class AdminRH extends Agent
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
  
}
