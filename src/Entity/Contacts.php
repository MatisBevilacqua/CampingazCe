<?php

namespace App\Entity;

use App\Repository\ContactsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ContactsRepository::class)]
class Contacts
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $objects = null;

    #[ORM\Column(length: 255)]
    private ?string $descriptions = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getObjects(): ?string
    {
        return $this->objects;
    }

    public function setObjects(string $objects): self
    {
        $this->objects = $objects;

        return $this;
    }

    public function getDescriptions(): ?string
    {
        return $this->descriptions;
    }

    public function setDescriptions(string $descriptions): self
    {
        $this->descriptions = $descriptions;

        return $this;
    }
}
