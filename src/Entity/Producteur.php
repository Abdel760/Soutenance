<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProducteurRepository")
 */
class Producteur
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $horaire;

    /**
     * @ORM\Column(type="string", length=60, unique=true)
     */
    private $bon;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $facture;

    /**
     * @ORM\Column(type="string", length=12, unique=true)
     */
    private $note;



    // ---------------------------- Getters et Setters ------------------------------------//

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
    public function getHoraire()
    {
        return $this->horaire;
    }

    /**
     * @param mixed $horaire
     */
    public function setHoraire($horaire): void
    {
        $this->horaire = $horaire;
    }

    /**
     * @return mixed
     */
    public function getBon()
    {
        return $this->bon;
    }

    /**
     * @param mixed $bon
     */
    public function setBon($bon): void
    {
        $this->bon = $bon;
    }

    /**
     * @return mixed
     */
    public function getFacture()
    {
        return $this->facture;
    }

    /**
     * @param mixed $facture
     */
    public function setFacture($facture): void
    {
        $this->facture = $facture;
    }

    /**
     * @return mixed
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * @param mixed $note
     */
    public function setNote($note): void
    {
        $this->note = $note;
    }


}
