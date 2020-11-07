<?php

namespace App\Entity;

use App\Repository\DateTestRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DateTestRepository::class)
 */
class DateTest
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
    private $datefield;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDatefield(): ?\DateTimeInterface
    {
        return $this->datefield;
    }

    public function setDatefield(\DateTimeInterface $datefield): self
    {
        $this->datefield = $datefield;

        return $this;
    }
}
