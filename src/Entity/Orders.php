<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\OrdersRepository")
 */
class Orders
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $doughnutsordered;

    /**
     * @ORM\Column(type="integer")
     */
    private $totalprice;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDoughnutsordered(): ?string
    {
        return $this->doughnutsordered;
    }

    public function setDoughnutsordered(string $doughnutsordered): self
    {
        $this->doughnutsordered = $doughnutsordered;

        return $this;
    }

    public function getTotalprice(): ?int
    {
        return $this->totalprice;
    }

    public function setTotalprice(int $totalprice): self
    {
        $this->totalprice = $totalprice;

        return $this;
    }
}
