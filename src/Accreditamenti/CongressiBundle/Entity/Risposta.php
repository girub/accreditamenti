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
    protected $id;

    /**
     * @var string $descrizione
     *
     * @ORM\Column(name="descrizione", type="string", length=255)
     */
    protected $descrizione;

    /**
     * @var boolean $vero
     *
     * @ORM\Column(name="vero", nullable=true, type="boolean")
     */
    private $vero;

    /**
     * @var boolean $aperta
     *
     * @ORM\Column(name="aperta", type="boolean")
     */
    private $aperta = false;

    /**
     * @var boolean $textarea
     *
     * @ORM\Column(name="textarea", type="boolean")
     */
    private $textarea = false;

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
    public function setDomanda(\Accreditamenti\CongressiBundle\Entity\Domanda $domanda) {
        $this->domanda = $domanda;
    }

    /**
     * Get domanda
     *
     * @return Accreditamenti\CongressiBundle\Entity\Domanda 
     */
    public function getDomanda() {
        return $this->domanda;
    }

    /**
     * Set aperta
     *
     * @param boolean $aperta
     */
    public function setAperta($aperta) {
        $this->aperta = $aperta;
    }

    /**
     * Get aperta
     *
     * @return boolean 
     */
    public function getAperta() {
        return $this->aperta;
    }

    /**
     * Set textarea
     *
     * @param boolean $textarea
     */
    public function setTextarea($textarea) {
        $this->textarea = $textarea;
    }

    /**
     * Get textarea
     *
     * @return boolean 
     */
    public function getTextarea() {
        return $this->textarea;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function __toString() {
        return $this->getDescrizione();
    }

}