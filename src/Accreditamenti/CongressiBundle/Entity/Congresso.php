<?php

namespace Accreditamenti\CongressiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\OneToMany;

/**
 * Accreditamenti\CongressiBundle\Entity\Congresso
 *
 * @ORM\Table(name="aim_congresso")
 * @ORM\Entity(repositoryClass="Accreditamenti\CongressiBundle\Entity\CongressoRepository")
 */
class Congresso {

    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $codice_congresso
     *
     * @ORM\Column(name="codice_congresso", nullable=true, type="string", length=255)
     */
    private $codice_congresso;

    /**
     * @var string $url
     *
     * @ORM\Column(name="url", nullable=true, type="string", length=255)
     */
    private $url;

    /**
     * @var string $titolo
     *
     * @ORM\Column(name="titolo", type="string", length=255)
     */
    private $titolo;

    /**
     * @var text $descrizione
     *
     * @ORM\Column(name="descrizione", nullable=true, type="text")
     */
    private $descrizione;

    /**
     * @var datetime $data_inizio
     *
     * @ORM\Column(name="data_inizio", type="datetime")
     */
    private $data_inizio;

    /**
     * @var datetime $data_fine
     *
     * @ORM\Column(name="data_fine", type="datetime")
     */
    private $data_fine;

    /**
     * @var string $luogo
     *
     * @ORM\Column(name="luogo", type="string", length=255)
     */
    private $luogo;

    /**
     * @var string $manifesto
     *
     * @ORM\Column(name="manifesto", type="string", length=255, nullable=true)
     */
    private $manifesto;

    /**
     * @var string $path_pdf_programma
     *
     * @ORM\Column(name="path_pdf_programma", nullable=true, type="string", length=255)
     */
    private $path_pdf_programma;

    /**
     * @var string $path_pdf_iscrizione
     *
     * @ORM\Column(name="path_pdf_iscrizione", nullable=true, type="string", length=255)
     */
    private $path_pdf_iscrizione;

    /**
     * @var string $path_pdf_prenotazione
     *
     * @ORM\Column(name="path_pdf_prenotazione", nullable=true, type="string", length=255)
     */
    private $path_pdf_prenotazione;

    /**
     * @var string $email_referente
     *
     * @ORM\Column(name="email_referente", nullable=true, type="string", length=255)
     */
    private $email_referente;

    /**
     * @var boolean $ricezione_abstract
     *
     * @ORM\Column(name="ricezione_abstract", nullable=true, type="boolean")
     */
    private $ricezione_abstract;

    /**
     * @var boolean $pagina_sponsor
     *
     * @ORM\Column(name="pagina_sponsor", nullable=true, type="boolean")
     */
    private $pagina_sponsor;

    /**
     * @var boolean $abilitato
     *
     * @ORM\Column(name="abilitato", nullable=true, type="boolean")
     */
    private $abilitato;

    /**
     * @OneToMany(targetEntity="Accreditamento", mappedBy="congresso")
     */
    private $accreditamenti;

    public function __toString() {
        return $this->titolo;
    }

    public function __construct() {
        $this->accreditamenti = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set codice_congresso
     *
     * @param string $codiceCongresso
     */
    public function setCodiceCongresso($codiceCongresso) {
        $this->codice_congresso = $codiceCongresso;
    }

    /**
     * Get codice_congresso
     *
     * @return string 
     */
    public function getCodiceCongresso() {
        return $this->codice_congresso;
    }

    /**
     * Set url
     *
     * @param string $url
     */
    public function setUrl($url) {
        $this->url = $url;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl() {
        return $this->url;
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
     * Set descrizione
     *
     * @param text $descrizione
     */
    public function setDescrizione($descrizione) {
        $this->descrizione = $descrizione;
    }

    /**
     * Get descrizione
     *
     * @return text 
     */
    public function getDescrizione() {
        return $this->descrizione;
    }

    /**
     * Set data_inizio
     *
     * @param datetime $dataInizio
     */
    public function setDataInizio($dataInizio) {
        $this->data_inizio = $dataInizio;
    }

    /**
     * Get data_inizio
     *
     * @return datetime 
     */
    public function getDataInizio() {
        return $this->data_inizio;
    }

    /**
     * Set data_fine
     *
     * @param datetime $dataFine
     */
    public function setDataFine($dataFine) {
        $this->data_fine = $dataFine;
    }

    /**
     * Get data_fine
     *
     * @return datetime 
     */
    public function getDataFine() {
        return $this->data_fine;
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
     * Set manifesto
     *
     * @param string $manifesto
     */
    public function setManifesto($manifesto) {
        $this->manifesto = $manifesto;
    }

    /**
     * Get manifesto
     *
     * @return string 
     */
    public function getManifesto() {
        return $this->manifesto;
    }

    /**
     * Set path_pdf_programma
     *
     * @param string $pathPdfProgramma
     */
    public function setPathPdfProgramma($pathPdfProgramma) {
        $this->path_pdf_programma = $pathPdfProgramma;
    }

    /**
     * Get path_pdf_programma
     *
     * @return string 
     */
    public function getPathPdfProgramma() {
        return $this->path_pdf_programma;
    }

    /**
     * Set path_pdf_iscrizione
     *
     * @param string $pathPdfIscrizione
     */
    public function setPathPdfIscrizione($pathPdfIscrizione) {
        $this->path_pdf_iscrizione = $pathPdfIscrizione;
    }

    /**
     * Get path_pdf_iscrizione
     *
     * @return string 
     */
    public function getPathPdfIscrizione() {
        return $this->path_pdf_iscrizione;
    }

    /**
     * Set path_pdf_prenotazione
     *
     * @param string $pathPdfPrenotazione
     */
    public function setPathPdfPrenotazione($pathPdfPrenotazione) {
        $this->path_pdf_prenotazione = $pathPdfPrenotazione;
    }

    /**
     * Get path_pdf_prenotazione
     *
     * @return string 
     */
    public function getPathPdfPrenotazione() {
        return $this->path_pdf_prenotazione;
    }

    /**
     * Set email_referente
     *
     * @param string $emailReferente
     */
    public function setEmailReferente($emailReferente) {
        $this->email_referente = $emailReferente;
    }

    /**
     * Get email_referente
     *
     * @return string 
     */
    public function getEmailReferente() {
        return $this->email_referente;
    }

    /**
     * Set ricezione_abstract
     *
     * @param boolean $ricezioneAbstract
     */
    public function setRicezioneAbstract($ricezioneAbstract) {
        $this->ricezione_abstract = $ricezioneAbstract;
    }

    /**
     * Get ricezione_abstract
     *
     * @return boolean 
     */
    public function getRicezioneAbstract() {
        return $this->ricezione_abstract;
    }

    /**
     * Set pagina_sponsor
     *
     * @param boolean $paginaSponsor
     */
    public function setPaginaSponsor($paginaSponsor) {
        $this->pagina_sponsor = $paginaSponsor;
    }

    /**
     * Get pagina_sponsor
     *
     * @return boolean 
     */
    public function getPaginaSponsor() {
        return $this->pagina_sponsor;
    }

    /**
     * Set abilitato
     *
     * @param boolean $abilitato
     */
    public function setAbilitato($abilitato) {
        $this->abilitato = $abilitato;
    }

    /**
     * Get abilitato
     *
     * @return boolean 
     */
    public function getAbilitato() {
        return $this->abilitato;
    }

    /**
     * Add accreditamenti
     *
     * @param Accreditamenti\CongressiBundle\Entity\Accreditamento $accreditamenti
     */
    public function addAccreditamento(\Accreditamenti\CongressiBundle\Entity\Accreditamento $accreditamenti) {
        $this->accreditamenti[] = $accreditamenti;
    }

    /**
     * Get accreditamenti
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getAccreditamenti() {
        return $this->accreditamenti;
    }

}