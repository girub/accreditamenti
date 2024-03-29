<?php

namespace Accreditamenti\CongressiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\OneToMany;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Accreditamenti\CongressiBundle\Entity\Accreditamento
 *
 * @ORM\Table(name="aim_accreditamento")
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
     * @OneToMany(targetEntity="QuestionarioEcm", mappedBy="accreditamento")
     */
    private $questionarioEcm;

    /**
     * @OneToMany(targetEntity="QuestionarioCustomerSatisfaction", mappedBy="accreditamento")
     */
    private $questionarioCustomerSatisfaction;

    /**
     * @OneToMany(targetEntity="QuestionarioValutazione", mappedBy="accreditamento")
     */
    private $questionarioValutazione;

    /**
     * @var boolean $attiva_questionario
     *
     * @ORM\Column(name="attiva_questionario", nullable=true, type="boolean")
     */
    private $attiva_questionario;

    /**
     * @OneToMany(targetEntity="Iscritti", mappedBy="accreditamento")
     */
    private $iscritti;

    /**
     * @OneToMany(targetEntity="Anagrafica", mappedBy="accreditamento")
     */
    private $anagrafica;

    
     /**
     * @var text $supporto_aziende_sponsor
     *
     * @ORM\Column(name="supporto_aziende_sponsor", type="text")
     */
    private $supporto_aziende_sponsor;
    
     
     /**
     * @var text $certificato_ecm
     *
     * @ORM\Column(name="certificato_ecm", nullable=true, type="text")
     */
    private $certificato_ecm;
    
    
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

    /**qui salvo il questionario di valutazione
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
    public function setCongresso(\Accreditamenti\CongressiBundle\Entity\Congresso $congresso) {
        $this->congresso = $congresso;
    }

    /**
     * Get congresso
     *
     * @return Accreditamenti\CongressiBundle\Entity\Congresso 
     */
    public function getCongresso() {
        return $this->congresso;
    }

    public function __toString() {
        return $this->getTitolo();
    }

    /**
     * Set attiva_questionario
     *
     * @param boolean $attivaQuestionario
     */
    public function setAttivaQuestionario($attivaQuestionario) {
        $this->attiva_questionario = $attivaQuestionario;
    }

    /**
     * Get attiva_questionario
     *
     * @return boolean 
     */
    public function getAttivaQuestionario() {
        return $this->attiva_questionario;
    }

    /**
     * Add questionarioCustomerSatisfaction
     *
     * @param Accreditamenti\CongressiBundle\Entity\QuestionarioCustomerSatisfaction $questionarioCustomerSatisfaction
     */
    public function addQuestionarioCustomerSatisfaction(\Accreditamenti\CongressiBundle\Entity\QuestionarioCustomerSatisfaction $questionarioCustomerSatisfaction) {
        $this->questionarioCustomerSatisfaction[] = $questionarioCustomerSatisfaction;
    }

    /**
     * Get questionarioCustomerSatisfaction
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getQuestionarioCustomerSatisfaction() {
        return $this->questionarioCustomerSatisfaction;
    }

    /**
     * Add questionarioValutazione
     *
     * @param Accreditamenti\CongressiBundle\Entity\QuestionarioValutazione $questionarioValutazione
     */
    public function addQuestionarioValutazione(\Accreditamenti\CongressiBundle\Entity\QuestionarioValutazione $questionarioValutazione) {
        $this->questionarioValutazione[] = $questionarioValutazione;
    }

    /**
     * Get questionarioValutazione
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getQuestionarioValutazione() {
        return $this->questionarioValutazione;
    }

    /**
     * Add iscritti
     *
     * @param Accreditamenti\CongressiBundle\Entity\Iscritti $iscritti
     */
    public function addIscritti(\Accreditamenti\CongressiBundle\Entity\Iscritti $iscritti) {
        $this->iscritti[] = $iscritti;
    }

    /**
     * Get iscritti
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getIscritti() {
        return $this->iscritti;
    }

    /**
     * Add anagrafica
     *
     * @param Accreditamenti\CongressiBundle\Entity\Anagrafica $anagrafica
     */
    public function addAnagrafica(\Accreditamenti\CongressiBundle\Entity\Anagrafica $anagrafica) {
        $this->anagrafica[] = $anagrafica;
    }

    /**
     * Get anagrafica
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getAnagrafica() {
        return $this->anagrafica;
    }

    public function __construct() {
        $this->questionarioEcm = new \Doctrine\Common\Collections\ArrayCollection();
        $this->questionarioCustomerSatisfaction = new \Doctrine\Common\Collections\ArrayCollection();
        $this->questionarioValutazione = new \Doctrine\Common\Collections\ArrayCollection();
        $this->iscritti = new \Doctrine\Common\Collections\ArrayCollection();
        $this->anagrafica = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add questionarioEcm
     *
     * @param Accreditamenti\CongressiBundle\Entity\QuestionarioEcm $questionarioEcm
     */
    public function addQuestionarioEcm(\Accreditamenti\CongressiBundle\Entity\QuestionarioEcm $questionarioEcm) {
        $this->questionarioEcm[] = $questionarioEcm;
    }

    /**
     * Get questionarioEcm
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getQuestionarioEcm() {
        return $this->questionarioEcm;
    }


    /**
     * Set supporto_aziende_sponsor
     *
     * @param text $supportoAziendeSponsor
     */
    public function setSupportoAziendeSponsor($supportoAziendeSponsor)
    {
        $this->supporto_aziende_sponsor = $supportoAziendeSponsor;
    }

    /**
     * Get supporto_aziende_sponsor
     *
     * @return text 
     */
    public function getSupportoAziendeSponsor()
    {
        return $this->supporto_aziende_sponsor;
    }

    /**
     * Set certificato_ecm
     *
     * @param text $certificatoEcm
     */
    public function setCertificatoEcm($certificatoEcm)
    {
        $this->certificato_ecm = $certificatoEcm;
    }

    /**
     * Get certificato_ecm
     *
     * @return text 
     */
    public function getCertificatoEcm()
    {
        return $this->certificato_ecm;
    }
}