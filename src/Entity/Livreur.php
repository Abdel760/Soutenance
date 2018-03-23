<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LivreurRepository")
 */
class Livreur
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
    private $nom;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $vehicule;

    /**
     * @ORM\Column(type="string", length=60, unique=true)
     */
    private $long;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $lat;

    /**
     * @ORM\Column(type="string", length=12, unique=true)
     */
    private $bon;

    /**
     * @ORM\Column(type="string", length=150, unique=true)
     */
    private $facture;

    /**
     * @ORM\Column(type="string", length=150)
     */
    private $note;

    /**
     * @ORM\Column(type="array"))
     */
    private $horaire;

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
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getVehicule()
    {
        return $this->vehicule;
    }

    /**
     * @param mixed $vehicule
     */
    public function setVehicule($vehicule): void
    {
        $this->vehicule = $vehicule;
    }

    /**
     * @return mixed
     */
    public function getLong()
    {
        return $this->long;
    }

    /**
     * @param mixed $long
     */
    public function setLong($long): void
    {
        $this->long = $long;
    }

    /**
     * @return mixed
     */
    public function getLat()
    {
        return $this->lat;
    }

    /**
     * @param mixed $lat
     */
    public function setLat($lat): void
    {
        $this->lat = $lat;
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


}
