<?php

namespace Esprit\GalerieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Proprietaire
 *
 * @ORM\Table(name="proprietaire")
 * @ORM\Entity
 */
class Proprietaire
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_abonne", type="string", length=50, nullable=false)
     */
    private $nomAbonne;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_abonne", type="string", length=50, nullable=false)
     */
    private $prenomAbonne;

    /**
     * @var string
     *
     * @ORM\Column(name="date_naissance_abonne", type="string", length=50, nullable=false)
     */
    private $dateNaissanceAbonne;

    /**
     * @var string
     *
     * @ORM\Column(name="email_abonne", type="string", length=50, nullable=false)
     */
    private $emailAbonne;

    /**
     * @var string
     *
     * @ORM\Column(name="login_abonne", type="string", length=50, nullable=false)
     */
    private $loginAbonne;

    /**
     * @var string
     *
     * @ORM\Column(name="password_abonne", type="string", length=50, nullable=false)
     */
    private $passwordAbonne;

    /**
     * @var string
     *
     * @ORM\Column(name="role", type="string", length=50, nullable=false)
     */
    private $role;

    /**
     * @var integer
     *
     * @ORM\Column(name="is_connected", type="integer", nullable=false)
     */
    private $isConnected;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nomAbonne
     *
     * @param string $nomAbonne
     * @return Proprietaire
     */
    public function setNomAbonne($nomAbonne)
    {
        $this->nomAbonne = $nomAbonne;

        return $this;
    }

    /**
     * Get nomAbonne
     *
     * @return string 
     */
    public function getNomAbonne()
    {
        return $this->nomAbonne;
    }

    /**
     * Set prenomAbonne
     *
     * @param string $prenomAbonne
     * @return Proprietaire
     */
    public function setPrenomAbonne($prenomAbonne)
    {
        $this->prenomAbonne = $prenomAbonne;

        return $this;
    }

    /**
     * Get prenomAbonne
     *
     * @return string 
     */
    public function getPrenomAbonne()
    {
        return $this->prenomAbonne;
    }

    /**
     * Set dateNaissanceAbonne
     *
     * @param string $dateNaissanceAbonne
     * @return Proprietaire
     */
    public function setDateNaissanceAbonne($dateNaissanceAbonne)
    {
        $this->dateNaissanceAbonne = $dateNaissanceAbonne;

        return $this;
    }

    /**
     * Get dateNaissanceAbonne
     *
     * @return string 
     */
    public function getDateNaissanceAbonne()
    {
        return $this->dateNaissanceAbonne;
    }

    /**
     * Set emailAbonne
     *
     * @param string $emailAbonne
     * @return Proprietaire
     */
    public function setEmailAbonne($emailAbonne)
    {
        $this->emailAbonne = $emailAbonne;

        return $this;
    }

    /**
     * Get emailAbonne
     *
     * @return string 
     */
    public function getEmailAbonne()
    {
        return $this->emailAbonne;
    }

    /**
     * Set loginAbonne
     *
     * @param string $loginAbonne
     * @return Proprietaire
     */
    public function setLoginAbonne($loginAbonne)
    {
        $this->loginAbonne = $loginAbonne;

        return $this;
    }

    /**
     * Get loginAbonne
     *
     * @return string 
     */
    public function getLoginAbonne()
    {
        return $this->loginAbonne;
    }

    /**
     * Set passwordAbonne
     *
     * @param string $passwordAbonne
     * @return Proprietaire
     */
    public function setPasswordAbonne($passwordAbonne)
    {
        $this->passwordAbonne = $passwordAbonne;

        return $this;
    }

    /**
     * Get passwordAbonne
     *
     * @return string 
     */
    public function getPasswordAbonne()
    {
        return $this->passwordAbonne;
    }

    /**
     * Set role
     *
     * @param string $role
     * @return Proprietaire
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return string 
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set isConnected
     *
     * @param integer $isConnected
     * @return Proprietaire
     */
    public function setIsConnected($isConnected)
    {
        $this->isConnected = $isConnected;

        return $this;
    }

    /**
     * Get isConnected
     *
     * @return integer 
     */
    public function getIsConnected()
    {
        return $this->isConnected;
    }
}
