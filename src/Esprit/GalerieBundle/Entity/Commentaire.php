<?php

namespace Esprit\GalerieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commentaire
 *
 * @ORM\Table(name="commentaire", indexes={@ORM\Index(name="fk_salle", columns={"fk_salle"}), @ORM\Index(name="fk_evenement", columns={"fk_evenement"}), @ORM\Index(name="fk_element", columns={"fk_element"}), @ORM\Index(name="fk_abonne", columns={"fk_abonne"})})
 * @ORM\Entity
 */
class Commentaire
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
     * @ORM\Column(name="libelle_commentaire", type="string", length=50, nullable=false)
     */
    private $libelleCommentaire;

    /**
     * @var string
     *
     * @ORM\Column(name="date_commentaire", type="string", length=50, nullable=false)
     */
    private $dateCommentaire;

    /**
     * @var \Abonne
     *
     * @ORM\ManyToOne(targetEntity="Abonne")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_abonne", referencedColumnName="id")
     * })
     */
    private $fkAbonne;

    /**
     * @var \Element
     *
     * @ORM\ManyToOne(targetEntity="Element")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_element", referencedColumnName="id")
     * })
     */
    private $fkElement;

    /**
     * @var \Evenement
     *
     * @ORM\ManyToOne(targetEntity="Evenement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_evenement", referencedColumnName="id")
     * })
     */
    private $fkEvenement;

    /**
     * @var \Salle
     *
     * @ORM\ManyToOne(targetEntity="Salle")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_salle", referencedColumnName="id")
     * })
     */
    private $fkSalle;



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
     * Set libelleCommentaire
     *
     * @param string $libelleCommentaire
     * @return Commentaire
     */
    public function setLibelleCommentaire($libelleCommentaire)
    {
        $this->libelleCommentaire = $libelleCommentaire;

        return $this;
    }

    /**
     * Get libelleCommentaire
     *
     * @return string 
     */
    public function getLibelleCommentaire()
    {
        return $this->libelleCommentaire;
    }

    /**
     * Set dateCommentaire
     *
     * @param string $dateCommentaire
     * @return Commentaire
     */
    public function setDateCommentaire($dateCommentaire)
    {
        $this->dateCommentaire = $dateCommentaire;

        return $this;
    }

    /**
     * Get dateCommentaire
     *
     * @return string 
     */
    public function getDateCommentaire()
    {
        return $this->dateCommentaire;
    }

    /**
     * Set fkAbonne
     *
     * @param \Esprit\GalerieBundle\Entity\Abonne $fkAbonne
     * @return Commentaire
     */
    public function setFkAbonne(\Esprit\GalerieBundle\Entity\Abonne $fkAbonne = null)
    {
        $this->fkAbonne = $fkAbonne;

        return $this;
    }

    /**
     * Get fkAbonne
     *
     * @return \Esprit\GalerieBundle\Entity\Abonne 
     */
    public function getFkAbonne()
    {
        return $this->fkAbonne;
    }

    /**
     * Set fkElement
     *
     * @param \Esprit\GalerieBundle\Entity\Element $fkElement
     * @return Commentaire
     */
    public function setFkElement(\Esprit\GalerieBundle\Entity\Element $fkElement = null)
    {
        $this->fkElement = $fkElement;

        return $this;
    }

    /**
     * Get fkElement
     *
     * @return \Esprit\GalerieBundle\Entity\Element 
     */
    public function getFkElement()
    {
        return $this->fkElement;
    }

    /**
     * Set fkEvenement
     *
     * @param \Esprit\GalerieBundle\Entity\Evenement $fkEvenement
     * @return Commentaire
     */
    public function setFkEvenement(\Esprit\GalerieBundle\Entity\Evenement $fkEvenement = null)
    {
        $this->fkEvenement = $fkEvenement;

        return $this;
    }

    /**
     * Get fkEvenement
     *
     * @return \Esprit\GalerieBundle\Entity\Evenement 
     */
    public function getFkEvenement()
    {
        return $this->fkEvenement;
    }

    /**
     * Set fkSalle
     *
     * @param \Esprit\GalerieBundle\Entity\Salle $fkSalle
     * @return Commentaire
     */
    public function setFkSalle(\Esprit\GalerieBundle\Entity\Salle $fkSalle = null)
    {
        $this->fkSalle = $fkSalle;

        return $this;
    }

    /**
     * Get fkSalle
     *
     * @return \Esprit\GalerieBundle\Entity\Salle 
     */
    public function getFkSalle()
    {
        return $this->fkSalle;
    }
}
