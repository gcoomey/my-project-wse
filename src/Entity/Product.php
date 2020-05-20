<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProductRepository")
 */
class Product
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
    private $prodCode;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prodName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prodDesc;

    /**
     * @ORM\Column(type="integer")
     */
    private $prodPrice;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProdCode(): ?string
    {
        return $this->prodCode;
    }

    public function setProdCode(string $prodCode): self
    {
        $this->prodCode = $prodCode;

        return $this;
    }

    public function getProdName(): ?string
    {
        return $this->prodName;
    }

    public function setProdName(string $prodName): self
    {
        $this->prodName = $prodName;

        return $this;
    }

    public function getProdDesc(): ?string
    {
        return $this->prodDesc;
    }

    public function setProdDesc(string $prodDesc): self
    {
        $this->prodDesc = $prodDesc;

        return $this;
    }

    public function getProdPrice(): ?int
    {
        return $this->prodPrice;
    }

    public function setProdPrice(int $prodPrice): self
    {
        $this->prodPrice = $prodPrice;

        return $this;
    }
}
