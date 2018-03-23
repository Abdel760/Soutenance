<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CommentaireRepository")
 */
class Commentaire
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\User", cascade={"persist"})
     */
    private $user;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $contenu;

    /**
     * @ORM\Column(type="datetime")
     */
    private $datecreation;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", cascade={"persist"})
     */
    private $envoie;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", cascade={"persist"})
     */
    private $recoie;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Commandes", cascade={"persist"})
     */
    private $commandes;

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
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user): void
    {
        $this->user = $user;
    }

    /**
     * @return mixed
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * @param mixed $contenu
     */
    public function setContenu($contenu): void
    {
        $this->contenu = $contenu;
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

    /**
     * @return mixed
     */
    public function getEnvoie()
    {
        return $this->envoie;
    }

    /**
     * @param mixed $envoie
     */
    public function setEnvoie($envoie): void
    {
        $this->envoie = $envoie;
    }

    /**
     * @return mixed
     */
    public function getRecoie()
    {
        return $this->recoie;
    }

    /**
     * @param mixed $recoie
     */
    public function setRecoie($recoie): void
    {
        $this->recoie = $recoie;
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

}
