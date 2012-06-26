<?php

namespace Accreditamenti\CongressiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;

/**
 * Accreditamenti\CongressiBundle\Entity\Risposta
 *
 * @ORM\Table(name="ideacpa_risposta")
 * @ORM\Entity(repositoryClass="Accreditamenti\CongressiBundle\Entity\RispostaRepository")
 */
class Risposta {

    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $descrizione
     *
     * @ORM\Column(name="descrizione", type="string", length=255)
     */
    private $descrizione;

    /**
     * @var boolean $vero
     *
     * @ORM\Column(name="vero", nullable=true, type="boolean")
     */
    private $vero;

    /**
     * @ManyToOne(targetEntity="Domanda", inversedBy="risposta")
     * @JoinColumn(name="domanda_id", referencedColumnName="id")
     */
    private $domanda;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set descrizione
     *
     * @param string $descrizione
     */
    public function setDescrizione($descrizione) {
        $this->descrizione = $descrizione;
    }

    /**
     * Get descrizione
     *
     * @return string 
     */
    public function getDescrizione() {
        return $this->descrizione;
    }

    /**
     * Set vero
     *
     * @param boolean $vero
     */
    public function setVero($vero) {
        $this->vero = $vero;
    }

    /**
     * Get vero
     *
     * @return boolean 
     */
    public function getVero() {
        return $this->vero;
    }


    /**
     * Set domanda
     *
     * @param Accreditamenti\CongressiBundle\Entity\Domanda $domanda
     */
    public function setDomanda(\Accreditamenti\CongressiBundle\Entity\Domanda $domanda)
    {
        $this->domanda = $domanda;
    }

    /**
     * Get domanda
     *
     * @return Accreditamenti\CongressiBundle\Entity\Domanda 
     */
    public function getDomanda()
    {
        return $this->domanda;
    }
}