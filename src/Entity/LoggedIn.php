<?php

namespace App\Entity;

use App\Repository\LoggedInRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LoggedInRepository::class)
 */
class LoggedIn
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private int $id;
    private string $text ="Lorum ipsum blablabla...";
    private string $name = "Unknown1";

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getText(): string
    {
        return $this->text;
    }


}
