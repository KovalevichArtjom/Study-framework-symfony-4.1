<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PlaceJobRepository")
 */
class PlaceJob
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true,  unique=true)
     */
    private $okmo;

    /**
     * @ORM\Column(type="string", length=255, nullable=true,  unique=true)
     */
    private $snils;

    public function getId()
    {
        return $this->id;
    }

    public function getOkmo(): ?string
    {
        return $this->okmo;
    }

    public function setOkmo(?string $okmo): self
    {
        $this->okmo = $okmo;

        return $this;
    }

    public function getSnils(): ?string
    {
        return $this->snils;
    }

    public function setSnils(?string $snils): self
    {
        $this->snils = $snils;

        return $this;
    }
}
