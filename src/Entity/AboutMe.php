<?php

namespace App\Entity;

use App\Repository\AboutMeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AboutMeRepository::class)
 */
class AboutMe
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private int $id;
    private string $name = "";

    public function getId(): ?int
    {
        return $this->id;
    }

    public function showMyName() :string
    {
        return $this->name;
    }

    public function changeMyName() :string
    {
        if(isset($_POST["name"]))
        {
            $_SESSION["name"] = $_POST["name"];
            $this->name = $_POST["name"];
        }
        elseif (isset($_SESSION["name"]))
        {
            $this->name = $_SESSION["name"];
        }
        else {
            $this->name = $this->showMyName();
        }
        return $this->name;
    }
}
