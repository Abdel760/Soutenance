<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CommandesRepository")
 */
class Commandes
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $datecreation;



    // ----------------------------- Constructeur ------------------------------------------//

    public function __construct()
    {
        $this->datecreation = new \DateTime();
    }

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
    public function getDatecreation()
    {
        return $this->datecreation;
    }

    /**
     * @param mixed $datecreation
     */
    public function setDatecreation($datecreation): void
    {
        $this->datecreation = $datecreation;
    }
}
