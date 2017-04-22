<?php

namespace Esprit\GalerieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Element
 *
 * @ORM\Table(name="element", indexes={@ORM\Index(name="fk_artiste", columns={"fk_artiste"})})
 * @ORM\Entity
 */
class Element
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
     * @ORM\Column(name="nom_element", type="string", length=50, nullable=false)
     */
    private $nomElement;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_element", type="float", precision=10, scale=0, nullable=false)
     */
    private $prixElement;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=50, nullable=false)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="note_element", type="integer", nullable=false)
     */
    private $noteElement;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbr_signaux", type="integer", nullable=false)
     */
    private $nbrSignaux;

    /**
     * @var string
     *
     * @ORM\Column(name="photo_element", type="blob", nullable=false)
     */
    private $photoElement;

    /**
     * @var \Artiste
     *
     * @ORM\ManyToOne(targetEntity="Artiste")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_artiste", referencedColumnName="id")
     * })
     */
    private $fkArtiste;



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
     * Set nomElement
     *
     * @param string $nomElement
     * @return Element
     */
    public function setNomElement($nomElement)
    {
        $this->nomElement = $nomElement;

        return $this;
    }

    /**
     * Get nomElement
     *
     * @return string 
     */
    public function getNomElement()
    {
        return $this->nomElement;
    }

    /**
     * Set prixElement
     *
     * @param float $prixElement
     * @return Element
     */
    public function setPrixElement($prixElement)
    {
        $this->prixElement = $prixElement;

        return $this;
    }

    /**
     * Get prixElement
     *
     * @return float 
     */
    public function getPrixElement()
    {
        return $this->prixElement;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Element
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set noteElement
     *
     * @param integer $noteElement
     * @return Element
     */
    public function setNoteElement($noteElement)
    {
        $this->noteElement = $noteElement;

        return $this;
    }

    /**
     * Get noteElement
     *
     * @return integer 
     */
    public function getNoteElement()
    {
        return $this->noteElement;
    }

    /**
     * Set nbrSignaux
     *
     * @param integer $nbrSignaux
     * @return Element
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
     * Set photoElement
     *
     * @param string $photoElement
     * @return Element
     */
    public function setPhotoElement($photoElement)
    {
        $this->photoElement = $photoElement;

        return $this;
    }

    /**
     * Get photoElement
     *
     * @return string 
     */
    public function getPhotoElement()
    {
        return $this->photoElement;
    }

    /**
     * Set fkArtiste
     *
     * @param \Esprit\GalerieBundle\Entity\Artiste $fkArtiste
     * @return Element
     */
    public function setFkArtiste(\Esprit\GalerieBundle\Entity\Artiste $fkArtiste = null)
    {
        $this->fkArtiste = $fkArtiste;

        return $this;
    }

    /**
     * Get fkArtiste
     *
     * @return \Esprit\GalerieBundle\Entity\Artiste 
     */
    public function getFkArtiste()
    {
        return $this->fkArtiste;
    }
}
