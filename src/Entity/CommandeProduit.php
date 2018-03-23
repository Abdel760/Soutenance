<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CommandeProduitRepository")
 */
class CommandeProduit
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Produit", cascade={"persist"})
     */
    private $produit;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Commandes", cascade={"persist"})
     */
    private $commandes;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $quantite;

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

    /**
     * @return mixed
     */
    public function getCommandes()
    {
        return $this->commandes;
    }

    /**
     * @param mixed $commandes
     */
    public function setCommandes($commandes): void
    {
        $this->commandes = $commandes;
    }

    /**
     * @return mixed
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * @param mixed $quantite
     */
    public function setQuantite($quantite): void
    {
        $this->quantite = $quantite;
    }



}
