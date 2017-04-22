<?php

namespace Esprit\GalerieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Administrateur
 *
 * @ORM\Table(name="administrateur")
 * @ORM\Entity
 */
class Administrateur
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
     * @ORM\Column(name="nom_admin", type="string", length=50, nullable=false)
     */
    private $nomAdmin;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_admin", type="string", length=50, nullable=false)
     */
    private $prenomAdmin;

    /**
     * @var string
     *
     * @ORM\Column(name="login_admin", type="string", length=50, nullable=false)
     */
    private $loginAdmin;

    /**
     * @var string
     *
     * @ORM\Column(name="password_admin", type="string", length=50, nullable=false)
     */
    private $passwordAdmin;

    /**
     * @var string
     *
     * @ORM\Column(name="role", type="string", length=50, nullable=false)
     */
    private $role;



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
     * Set nomAdmin
     *
     * @param string $nomAdmin
     * @return Administrateur
     */
    public function setNomAdmin($nomAdmin)
    {
        $this->nomAdmin = $nomAdmin;

        return $this;
    }

    /**
     * Get nomAdmin
     *
     * @return string 
     */
    public function getNomAdmin()
    {
        return $this->nomAdmin;
    }

    /**
     * Set prenomAdmin
     *
     * @param string $prenomAdmin
     * @return Administrateur
     */
    public function setPrenomAdmin($prenomAdmin)
    {
        $this->prenomAdmin = $prenomAdmin;

        return $this;
    }

    /**
     * Get prenomAdmin
     *
     * @return string 
     */
    public function getPrenomAdmin()
    {
        return $this->prenomAdmin;
    }

    /**
     * Set loginAdmin
     *
     * @param string $loginAdmin
     * @return Administrateur
     */
    public function setLoginAdmin($loginAdmin)
    {
        $this->loginAdmin = $loginAdmin;

        return $this;
    }

    /**
     * Get loginAdmin
     *
     * @return string 
     */
    public function getLoginAdmin()
    {
        return $this->loginAdmin;
    }

    /**
     * Set passwordAdmin
     *
     * @param string $passwordAdmin
     * @return Administrateur
     */
    public function setPasswordAdmin($passwordAdmin)
    {
        $this->passwordAdmin = $passwordAdmin;

        return $this;
    }

    /**
     * Get passwordAdmin
     *
     * @return string 
     */
    public function getPasswordAdmin()
    {
        return $this->passwordAdmin;
    }

    /**
     * Set role
     *
     * @param string $role
     * @return Administrateur
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
}
