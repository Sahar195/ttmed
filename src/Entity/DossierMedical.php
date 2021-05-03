<?php

namespace App\Entity;

use App\Repository\DossierMedicalRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DossierMedicalRepository::class)
 */
class DossierMedical
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity=FicheMedicale::class, mappedBy="dossierMedical")
     */
    private $Fiches;

    /**
     * @ORM\OneToOne(targetEntity=Donnees::class, cascade={"persist", "remove"})
     */
    private $lesDonnees;

    public function __construct()
    {
        $this->Fiches = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection|FicheMedicale[]
     */
    public function getFiches(): Collection
    {
        return $this->Fiches;
    }

    public function addFich(FicheMedicale $fich): self
    {
        if (!$this->Fiches->contains($fich)) {
            $this->Fiches[] = $fich;
            $fich->setDossierMedical($this);
        }

        return $this;
    }

    public function removeFich(FicheMedicale $fich): self
    {
        if ($this->Fiches->removeElement($fich)) {
            // set the owning side to null (unless already changed)
            if ($fich->getDossierMedical() === $this) {
                $fich->setDossierMedical(null);
            }
        }

        return $this;
    }

    public function getLesDonnees(): ?Donnees
    {
        return $this->lesDonnees;
    }

    public function setLesDonnees(?Donnees $lesDonnees): self
    {
        $this->lesDonnees = $lesDonnees;

        return $this;
    }
}
