<?php

namespace Esprit\GalerieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evenement
 *
 * @ORM\Table(name="evenement", indexes={@ORM\Index(name="fk_artiste", columns={"fk_artiste"}), @ORM\Index(name="fk_salle", columns={"fk_salle"})})
 * @ORM\Entity
 */
class Evenement
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
     * @ORM\Column(name="nom_evenement", type="string", length=50, nullable=false)
     */
    private $nomEvenement;

    /**
     * @var string
     *
     * @ORM\Column(name="type_evenement", type="string", length=50, nullable=false)
     */
    private $typeEvenement;

    /**
     * @var string
     *
     * @ORM\Column(name="date_evenement", type="string", length=50, nullable=false)
     */
    private $dateEvenement;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbr_participants", type="integer", nullable=false)
     */
    private $nbrParticipants;

    /**
     * @var string
     *
     * @ORM\Column(name="description_evenement", type="string", length=50, nullable=false)
     */
    private $descriptionEvenement;

    /**
     * @var integer
     *
     * @ORM\Column(name="note_evenement", type="integer", nullable=false)
     */
    private $noteEvenement;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbr_signaux", type="integer", nullable=false)
     */
    private $nbrSignaux;

    /**
     * @var string
     *
     * @ORM\Column(name="photo_evenement", type="blob", nullable=false)
     */
    private $photoEvenement;

    /**
     * @var string
     *
     * @ORM\Column(name="date_creation_evenement", type="string", length=50, nullable=false)
     */
    private $dateCreationEvenement;

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
     * Set nomEvenement
     *
     * @param string $nomEvenement
     * @return Evenement
     */
    public function setNomEvenement($nomEvenement)
    {
        $this->nomEvenement = $nomEvenement;

        return $this;
    }

    /**
     * Get nomEvenement
     *
     * @return string 
     */
    public function getNomEvenement()
    {
        return $this->nomEvenement;
    }

    /**
     * Set typeEvenement
     *
     * @param string $typeEvenement
     * @return Evenement
     */
    public function setTypeEvenement($typeEvenement)
    {
        $this->typeEvenement = $typeEvenement;

        return $this;
    }

    /**
     * Get typeEvenement
     *
     * @return string 
     */
    public function getTypeEvenement()
    {
        return $this->typeEvenement;
    }

    /**
     * Set dateEvenement
     *
     * @param string $dateEvenement
     * @return Evenement
     */
    public function setDateEvenement($dateEvenement)
    {
        $this->dateEvenement = $dateEvenement;

        return $this;
    }

    /**
     * Get dateEvenement
     *
     * @return string 
     */
    public function getDateEvenement()
    {
        return $this->dateEvenement;
    }

    /**
     * Set nbrParticipants
     *
     * @param integer $nbrParticipants
     * @return Evenement
     */
    public function setNbrParticipants($nbrParticipants)
    {
        $this->nbrParticipants = $nbrParticipants;

        return $this;
    }

    /**
     * Get nbrParticipants
     *
     * @return integer 
     */
    public function getNbrParticipants()
    {
        return $this->nbrParticipants;
    }

    /**
     * Set descriptionEvenement
     *
     * @param string $descriptionEvenement
     * @return Evenement
     */
    public function setDescriptionEvenement($descriptionEvenement)
    {
        $this->descriptionEvenement = $descriptionEvenement;

        return $this;
    }

    /**
     * Get descriptionEvenement
     *
     * @return string 
     */
    public function getDescriptionEvenement()
    {
        return $this->descriptionEvenement;
    }

    /**
     * Set noteEvenement
     *
     * @param integer $noteEvenement
     * @return Evenement
     */
    public function setNoteEvenement($noteEvenement)
    {
        $this->noteEvenement = $noteEvenement;

        return $this;
    }

    /**
     * Get noteEvenement
     *
     * @return integer 
     */
    public function getNoteEvenement()
    {
        return $this->noteEvenement;
    }

    /**
     * Set nbrSignaux
     *
     * @param integer $nbrSignaux
     * @return Evenement
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
     * Set photoEvenement
     *
     * @param string $photoEvenement
     * @return Evenement
     */
    public function setPhotoEvenement($photoEvenement)
    {
        $this->photoEvenement = $photoEvenement;

        return $this;
    }

    /**
     * Get photoEvenement
     *
     * @return string 
     */
    public function getPhotoEvenement()
    {
        return $this->photoEvenement;
    }

    /**
     * Set dateCreationEvenement
     *
     * @param string $dateCreationEvenement
     * @return Evenement
     */
    public function setDateCreationEvenement($dateCreationEvenement)
    {
        $this->dateCreationEvenement = $dateCreationEvenement;

        return $this;
    }

    /**
     * Get dateCreationEvenement
     *
     * @return string 
     */
    public function getDateCreationEvenement()
    {
        return $this->dateCreationEvenement;
    }

    /**
     * Set fkArtiste
     *
     * @param \Esprit\GalerieBundle\Entity\Artiste $fkArtiste
     * @return Evenement
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

    /**
     * Set fkSalle
     *
     * @param \Esprit\GalerieBundle\Entity\Salle $fkSalle
     * @return Evenement
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
