<?php

namespace Accreditamenti\CongressiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Accreditamenti\CongressiBundle\Entity\Risposta
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Accreditamenti\CongressiBundle\Entity\RispostaRepository")
 */
class Risposta
{
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
     * @ORM\Column(name="vero", type="boolean")
     */
    private $vero;


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
     * Set descrizione
     *
     * @param string $descrizione
     */
    public function setDescrizione($descrizione)
    {
        $this->descrizione = $descrizione;
    }

    /**
     * Get descrizione
     *
     * @return string 
     */
    public function getDescrizione()
    {
        return $this->descrizione;
    }

    /**
     * Set vero
     *
     * @param boolean $vero
     */
    public function setVero($vero)
    {
        $this->vero = $vero;
    }

    /**
     * Get vero
     *
     * @return boolean 
     */
    public function getVero()
    {
        return $this->vero;
    }
}