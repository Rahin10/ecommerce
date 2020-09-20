<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 */
class User
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
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $roles;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $NAW;

    /**
     * @ORM\OneToMany(targetEntity=Base::class, mappedBy="user")
     */
    private $Base;

    public function __construct()
    {
        $this->Base = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getRoles(): ?string
    {
        return $this->roles;
    }

    public function setRoles(string $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getNAW(): ?string
    {
        return $this->NAW;
    }

    public function setNAW(string $NAW): self
    {
        $this->NAW = $NAW;

        return $this;
    }

    /**
     * @return Collection|Base[]
     */
    public function getBase(): Collection
    {
        return $this->Base;
    }

    public function addBase(Base $base): self
    {
        if (!$this->Base->contains($base)) {
            $this->Base[] = $base;
            $base->setUser($this);
        }

        return $this;
    }

    public function removeBase(Base $base): self
    {
        if ($this->Base->contains($base)) {
            $this->Base->removeElement($base);
            // set the owning side to null (unless already changed)
            if ($base->getUser() === $this) {
                $base->setUser(null);
            }
        }

        return $this;
    }
}
