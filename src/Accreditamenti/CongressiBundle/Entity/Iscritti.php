<?php

namespace Accreditamenti\CongressiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;

/**
 * Accreditamenti\CongressiBundle\Entity\Iscritti
 *
 * @ORM\Table(name="ideacpa_iscritti")
 * @ORM\Entity(repositoryClass="Accreditamenti\CongressiBundle\Entity\IscrittiRepository")
 */
class Iscritti {
    
    const PARTECIPANTE = 'PAR';

    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $cognome
     *
     * @ORM\Column(name="cognome", type="string", length=255)
     */
    private $cognome;

    /**
     * @var string $nome
     *
     * @ORM\Column(name="nome", type="string", length=255)
     */
    private $nome;

    /**
     * @var string $codice_fiscale
     *
     * @ORM\Column(name="codice_fiscale", type="string", length=255)
     */
    private $codice_fiscale;

    /**
     * @var string $tipologia_iscritto
     *
     * @ORM\Column(name="tipologia_iscritto", type="string", length=255)
     */
    private $tipologia_iscritto;

   
    /**
     * @var integer $accreditamento_id
     *
     * @ORM\Column(name="accreditamento_id", type="integer")
     */
    protected $accreditamento_id;

    
    /**
     * @ManyToOne(targetEntity="Accreditamento", inversedBy="iscritti")
     * @JoinColumn(name="accreditamento_id", referencedColumnName="id")
     */
    private $accreditamento;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set cognome
     *
     * @param string $cognome
     */
    public function setCognome($cognome) {
        $this->cognome = $cognome;
    }

    /**
     * Get cognome
     *
     * @return string 
     */
    public function getCognome() {
        return $this->cognome;
    }

    /**
     * Set nome
     *
     * @param string $nome
     */
    public function setNome($nome) {
        $this->nome = $nome;
    }

    /**
     * Get nome
     *
     * @return string 
     */
    public function getNome() {
        return $this->nome;
    }

    /**
     * Set codice_fiscale
     *
     * @param string $codiceFiscale
     */
    public function setCodiceFiscale($codiceFiscale) {
        $this->codice_fiscale = $codiceFiscale;
    }

    /**
     * Get codice_fiscale
     *
     * @return string 
     */
    public function getCodiceFiscale() {
        return $this->codice_fiscale;
    }

    /**
     * Set tipologia_iscritto
     *
     * @param string $tipologiaIscritto
     */
    public function setTipologiaIscritto($tipologiaIscritto) {
        $this->tipologia_iscritto = $tipologiaIscritto;
    }

    /**
     * Get tipologia_iscritto
     *
     * @return string 
     */
    public function getTipologiaIscritto() {
        return $this->tipologia_iscritto;
    }


    /**
     * Set accreditamento
     *
     * @param Accreditamenti\CongressiBundle\Entity\Accreditamento $accreditamento
     */
    public function setAccreditamento(\Accreditamenti\CongressiBundle\Entity\Accreditamento $accreditamento)
    {
        $this->accreditamento = $accreditamento;
    }

    /**
     * Get accreditamento
     *
     * @return Accreditamenti\CongressiBundle\Entity\Accreditamento 
     */
    public function getAccreditamento()
    {
        return $this->accreditamento;
    }
}