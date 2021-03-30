<?php

namespace App\Entity;

use App\Repository\DevisRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DevisRepository::class)
 */
class Devis
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $type_maison;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $type_usage;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $surface;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $budget;

    /**
     * @ORM\Column(type="integer")
     */
    private $nombre_etages;

    /**
     * @ORM\Column(type="integer")
     */
    private $nombre_chambres;

    /**
     * @ORM\Column(type="boolean")
     */
    private $garage;

    /**
     * @ORM\Column(type="boolean")
     */
    private $exterieur;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypeMaison(): ?string
    {
        return $this->type_maison;
    }

    public function setTypeMaison(string $type_maison): self
    {
        $this->type_maison = $type_maison;

        return $this;
    }

    public function getTypeUsage(): ?string
    {
        return $this->type_usage;
    }

    public function setTypeUsage(string $type_usage): self
    {
        $this->type_usage = $type_usage;

        return $this;
    }

    public function getSurface(): ?string
    {
        return $this->surface;
    }

    public function setSurface(string $surface): self
    {
        $this->surface = $surface;

        return $this;
    }

    public function getBudget(): ?string
    {
        return $this->budget;
    }

    public function setBudget(string $budget): self
    {
        $this->budget = $budget;

        return $this;
    }

    public function getNombreEtages(): ?int
    {
        return $this->nombre_etages;
    }

    public function setNombreEtages(int $nombre_etages): self
    {
        $this->nombre_etages = $nombre_etages;

        return $this;
    }

    public function getNombreChambres(): ?int
    {
        return $this->nombre_chambres;
    }

    public function setNombreChambres(int $nombre_chambres): self
    {
        $this->nombre_chambres = $nombre_chambres;

        return $this;
    }

    public function getGarage(): ?bool
    {
        return $this->garage;
    }

    public function setGarage(bool $garage): self
    {
        $this->garage = $garage;

        return $this;
    }

    public function getExterieur(): ?bool
    {
        return $this->exterieur;
    }

    public function setExterieur(bool $exterieur): self
    {
        $this->exterieur = $exterieur;

        return $this;
    }
}
