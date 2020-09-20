<?php

namespace App\Entity;

use App\Repository\FactuurRegelRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FactuurRegelRepository::class)
 */
class FactuurRegel
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
    private $Aantal;

    /**
     * @ORM\ManyToOne(targetEntity=Factuur::class)
     */
    private $Factuur_ID;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $no;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAantal(): ?int
    {
        return $this->Aantal;
    }

    public function setAantal(int $Aantal): self
    {
        $this->Aantal = $Aantal;

        return $this;
    }

    public function getFactuurID(): ?Factuur
    {
        return $this->Factuur_ID;
    }

    public function setFactuurID(?Factuur $Factuur_ID): self
    {
        $this->Factuur_ID = $Factuur_ID;

        return $this;
    }

    public function getNo(): ?string
    {
        return $this->no;
    }

    public function setNo(string $no): self
    {
        $this->no = $no;

        return $this;
    }
}
