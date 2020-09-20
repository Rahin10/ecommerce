<?php

namespace App\Entity;

use App\Repository\FactuurRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FactuurRepository::class)
 */
class Factuur
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $Factuur_datum;

    /**
     * @ORM\ManyToOne(targetEntity=User::class)
     */
    private $user_id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFactuurDatum(): ?\DateTimeInterface
    {
        return $this->Factuur_datum;
    }

    public function setFactuurDatum(\DateTimeInterface $Factuur_datum): self
    {
        $this->Factuur_datum = $Factuur_datum;

        return $this;
    }

    public function getUserId(): ?User
    {
        return $this->user_id;
    }

    public function setUserId(?User $user_id): self
    {
        $this->user_id = $user_id;

        return $this;
    }
}
