<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CommandeUserRepository")
 */
class CommandeUser
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", cascade={"persist"})
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Commandes", cascade={"persist"})
     */
    private $commandes;

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
