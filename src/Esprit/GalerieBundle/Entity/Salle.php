<?php

namespace Esprit\GalerieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Salle
 *
 * @ORM\Table(name="salle", indexes={@ORM\Index(name="fk_proprietaire", columns={"fk_proprietaire"})})
 * @ORM\Entity
 */
class Salle
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
     * @ORM\Column(name="nom_salle", type="string", length=50, nullable=false)
     */
    private $nomSalle;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse_salle", type="string", length=50, nullable=false)
     */
    private $adresseSalle;

    /**
     * @var integer
     *
     * @ORM\Column(name="capacite_salle", type="integer", nullable=false)
     */
    private $capaciteSalle;

    /**
     * @var integer
     *
     * @ORM\Column(name="note_salle", type="integer", nullable=false)
     */
    private $noteSalle;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbr_signaux", type="integer", nullable=false)
     */
    private $nbrSignaux;

    /**
     * @var \Proprietaire
     *
     * @ORM\ManyToOne(targetEntity="Proprietaire")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_proprietaire", referencedColumnName="id")
     * })
     */
    private $fkProprietaire;



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
     * Set nomSalle
     *
     * @param string $nomSalle
     * @return Salle
     */
    public function setNomSalle($nomSalle)
    {
        $this->nomSalle = $nomSalle;

        return $this;
    }

    /**
     * Get nomSalle
     *
     * @return string 
     */
    public function getNomSalle()
    {
        return $this->nomSalle;
    }

    /**
     * Set adresseSalle
     *
     * @param string $adresseSalle
     * @return Salle
     */
    public function setAdresseSalle($adresseSalle)
    {
        $this->adresseSalle = $adresseSalle;

        return $this;
    }

    /**
     * Get adresseSalle
     *
     * @return string 
     */
    public function getAdresseSalle()
    {
        return $this->adresseSalle;
    }

    /**
     * Set capaciteSalle
     *
     * @param integer $capaciteSalle
     * @return Salle
     */
    public function setCapaciteSalle($capaciteSalle)
    {
        $this->capaciteSalle = $capaciteSalle;

        return $this;
    }

    /**
     * Get capaciteSalle
     *
     * @return integer 
     */
    public function getCapaciteSalle()
    {
        return $this->capaciteSalle;
    }

    /**
     * Set noteSalle
     *
     * @param integer $noteSalle
     * @return Salle
     */
    public function setNoteSalle($noteSalle)
    {
        $this->noteSalle = $noteSalle;

        return $this;
    }

    /**
     * Get noteSalle
     *
     * @return integer 
     */
    public function getNoteSalle()
    {
        return $this->noteSalle;
    }

    /**
     * Set nbrSignaux
     *
     * @param integer $nbrSignaux
     * @return Salle
     */
    public function setNbrSignaux($nbrSignaux)
    {
        $this->nbrSignaux = $nbrSignaux;

        return $this;
    }

    /**
     * Get nbrSignaux
     *
     * @return integer 
     */
    public function getNbrSignaux()
    {
        return $this->nbrSignaux;
    }

    /**
     * Set fkProprietaire
     *
     * @param \Esprit\GalerieBundle\Entity\Proprietaire $fkProprietaire
     * @return Salle
     */
    public function setFkProprietaire(\Esprit\GalerieBundle\Entity\Proprietaire $fkProprietaire = null)
    {
        $this->fkProprietaire = $fkProprietaire;

        return $this;
    }

    /**
     * Get fkProprietaire
     *
     * @return \Esprit\GalerieBundle\Entity\Proprietaire 
     */
    public function getFkProprietaire()
    {
        return $this->fkProprietaire;
    }
}
