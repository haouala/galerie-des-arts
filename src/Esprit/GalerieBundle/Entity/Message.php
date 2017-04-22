<?php

namespace Esprit\GalerieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Message
 *
 * @ORM\Table(name="message", indexes={@ORM\Index(name="fk_destinataire", columns={"fk_destinataire"}), @ORM\Index(name="fk_recepteur", columns={"fk_recepteur"})})
 * @ORM\Entity
 */
class Message
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
     * @ORM\Column(name="libelle_message", type="string", length=50, nullable=false)
     */
    private $libelleMessage;

    /**
     * @var string
     *
     * @ORM\Column(name="date_message", type="string", length=50, nullable=false)
     */
    private $dateMessage;

    /**
     * @var \Abonne
     *
     * @ORM\ManyToOne(targetEntity="Abonne")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_destinataire", referencedColumnName="id")
     * })
     */
    private $fkDestinataire;

    /**
     * @var \Abonne
     *
     * @ORM\ManyToOne(targetEntity="Abonne")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_recepteur", referencedColumnName="id")
     * })
     */
    private $fkRecepteur;



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
     * Set libelleMessage
     *
     * @param string $libelleMessage
     * @return Message
     */
    public function setLibelleMessage($libelleMessage)
    {
        $this->libelleMessage = $libelleMessage;

        return $this;
    }

    /**
     * Get libelleMessage
     *
     * @return string 
     */
    public function getLibelleMessage()
    {
        return $this->libelleMessage;
    }

    /**
     * Set dateMessage
     *
     * @param string $dateMessage
     * @return Message
     */
    public function setDateMessage($dateMessage)
    {
        $this->dateMessage = $dateMessage;

        return $this;
    }

    /**
     * Get dateMessage
     *
     * @return string 
     */
    public function getDateMessage()
    {
        return $this->dateMessage;
    }

    /**
     * Set fkDestinataire
     *
     * @param \Esprit\GalerieBundle\Entity\Abonne $fkDestinataire
     * @return Message
     */
    public function setFkDestinataire(\Esprit\GalerieBundle\Entity\Abonne $fkDestinataire = null)
    {
        $this->fkDestinataire = $fkDestinataire;

        return $this;
    }

    /**
     * Get fkDestinataire
     *
     * @return \Esprit\GalerieBundle\Entity\Abonne 
     */
    public function getFkDestinataire()
    {
        return $this->fkDestinataire;
    }

    /**
     * Set fkRecepteur
     *
     * @param \Esprit\GalerieBundle\Entity\Abonne $fkRecepteur
     * @return Message
     */
    public function setFkRecepteur(\Esprit\GalerieBundle\Entity\Abonne $fkRecepteur = null)
    {
        $this->fkRecepteur = $fkRecepteur;

        return $this;
    }

    /**
     * Get fkRecepteur
     *
     * @return \Esprit\GalerieBundle\Entity\Abonne 
     */
    public function getFkRecepteur()
    {
        return $this->fkRecepteur;
    }
}
