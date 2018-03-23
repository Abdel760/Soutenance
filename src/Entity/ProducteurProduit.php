<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProducteurProduitRepository")
 */
class ProducteurProduit
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Producteur", cascade={"persist"})
     */
    private $producteur;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Produit", cascade={"persist"})
     */
    private $produit;

    // ---------------------------- Getters et Setters ------------------------------------//

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getProducteur()
    {
        return $this->producteur;
    }

    /**
     * @param mixed $producteur
     */
    public function setProducteur($producteur): void
    {
        $this->producteur = $producteur;
    }

    /**
     * @return mixed
     */
    public function getProduit()
    {
        return $this->produit;
    }

    /**
     * @param mixed $produit
     */
    public function setProduit($produit): void
    {
        $this->produit = $produit;
    }

}
