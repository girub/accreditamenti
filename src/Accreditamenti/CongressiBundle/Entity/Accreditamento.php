<?php

namespace Accreditamenti\CongressiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;

/**
 * Accreditamenti\CongressiBundle\Entity\Accreditamento
 *
 * @ORM\Table(name="ideacpa_accreditamento")
 * @ORM\Entity(repositoryClass="Accreditamenti\CongressiBundle\Entity\AccreditamentoRepository")
 */
class Accreditamento {

    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var float $numero_accreditamento
     *
     * @ORM\Column(name="numero_accreditamento", type="float")
     */
    private $numero_accreditamento;

    /**
     * @var string $titolo
     *
     * @ORM\Column(name="titolo", type="string", length=255)
     */
    private $titolo;

    /**
     * @var string $luogo
     *
     * @ORM\Column(name="luogo", type="string", length=255)
     */
    private $luogo;

    /**
     * @var date $data_inizio
     *
     * @ORM\Column(name="data_inizio", type="date")
     */
    private $data_inizio;

    /**
     * @var date $data_fine
     *
     * @ORM\Column(name="data_fine", type="date")
     */
    private $data_fine;

    /**
     * @var string $ore_formative
     *
     * @ORM\Column(name="ore_formative", type="string", length=255)
     */
    private $ore_formative;

    /**
     * @var text $obiettivo_formativo
     *
     * @ORM\Column(name="obiettivo_formativo", type="text")
     */
    private $obiettivo_formativo;

    /**
     * @var float $numero_crediti
     *
     * @ORM\Column(name="numero_crediti", type="float")
     */
    private $numero_crediti;
    
    /**
     * @ManyToOne(targetEntity="Congresso", inversedBy="accreditamenti")
     * @JoinColumn(name="congresso_id", referencedColumnName="id")
     */
    private $congresso;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set titolo
     *
     * @param string $titolo
     */
    public function setTitolo($titolo) {
        $this->titolo = $titolo;
    }

    /**
     * Get titolo
     *
     * @return string 
     */
    public function getTitolo() {
        return $this->titolo;
    }

    /**
     * Set luogo
     *
     * @param string $luogo
     */
    public function setLuogo($luogo) {
        $this->luogo = $luogo;
    }

    /**
     * Get luogo
     *
     * @return string 
     */
    public function getLuogo() {
        return $this->luogo;
    }

    /**
     * Set data_inizio
     *
     * @param date $dataInizio
     */
    public function setDataInizio($dataInizio) {
        $this->data_inizio = $dataInizio;
    }

    /**
     * Get data_inizio
     *
     * @return date 
     */
    public function getDataInizio() {
        return $this->data_inizio;
    }

    /**
     * Set data_fine
     *
     * @param date $dataFine
     */
    public function setDataFine($dataFine) {
        $this->data_fine = $dataFine;
    }

    /**
     * Get data_fine
     *
     * @return date 
     */
    public function getDataFine() {
        return $this->data_fine;
    }

    /**
     * Set ore_formative
     *
     * @param string $oreFormative
     */
    public function setOreFormative($oreFormative) {
        $this->ore_formative = $oreFormative;
    }

    /**
     * Get ore_formative
     *
     * @return string 
     */
    public function getOreFormative() {
        return $this->ore_formative;
    }

    /**
     * Set obiettivo_formativo
     *
     * @param text $obiettivoFormativo
     */
    public function setObiettivoFormativo($obiettivoFormativo) {
        $this->obiettivo_formativo = $obiettivoFormativo;
    }

    /**
     * Get obiettivo_formativo
     *
     * @return text 
     */
    public function getObiettivoFormativo() {
        return $this->obiettivo_formativo;
    }

    /**
     * Set numero_crediti
     *
     * @param float $numeroCrediti
     */
    public function setNumeroCrediti($numeroCrediti) {
        $this->numero_crediti = $numeroCrediti;
    }

    /**
     * Get numero_crediti
     *
     * @return float 
     */
    public function getNumeroCrediti() {
        return $this->numero_crediti;
    }

    /**
     * Set numero_accreditamento
     *
     * @param float $numeroAccreditamento
     */
    public function setNumeroAccreditamento($numeroAccreditamento) {
        $this->numero_accreditamento = $numeroAccreditamento;
    }

    /**
     * Get numero_accreditamento
     *
     * @return float 
     */
    public function getNumeroAccreditamento() {
        return $this->numero_accreditamento;
    }


    /**
     * Set congresso
     *
     * @param Accreditamenti\CongressiBundle\Entity\Congresso $congresso
     */
    public function setCongresso(\Accreditamenti\CongressiBundle\Entity\Congresso $congresso)
    {
        $this->congresso = $congresso;
    }

    /**
     * Get congresso
     *
     * @return Accreditamenti\CongressiBundle\Entity\Congresso 
     */
    public function getCongresso()
    {
        return $this->congresso;
    }
}