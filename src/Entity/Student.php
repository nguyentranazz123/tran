<?php

namespace App\Entity;

use App\Repository\StudentRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=StudentRepository::class)
 */
class Student
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $Name;

    /**
     * @ORM\Column(type="date")
     */
    private $DoB;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $PhoneNum;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $gender;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): self
    {
        $this->Name = $Name;

        return $this;
    }

    public function getDoB(): ?\DateTimeInterface
    {
        return $this->DoB;
    }

    public function setDoB(\DateTimeInterface $DoB): self
    {
        $this->DoB = $DoB;

        return $this;
    }

    public function getPhoneNum(): ?string
    {
        return $this->PhoneNum;
    }

    public function setPhoneNum(string $PhoneNum): self
    {
        $this->PhoneNum = $PhoneNum;

        return $this;
    }

    public function getGender(): ?string
    {
        return $this->gender;
    }

    public function setGender(string $gender): self
    {
        $this->gender = $gender;

        return $this;
    }
}
