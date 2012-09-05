<?php

namespace Accreditamenti\CongressiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Accreditamenti\CongressiBundle\Entity\Anagrafica
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Accreditamenti\CongressiBundle\Entity\AnagraficaRepository")
 */
class Anagrafica
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
     * @var string $tipo_iscrizione
     *
     * @ORM\Column(name="tipo_iscrizione", type="string", length=255)
     */
    private $tipo_iscrizione;

    /**
     * @var string $nome
     *
     * @ORM\Column(name="nome", type="string", length=255)
     */
    private $nome;

    /**
     * @var string $cognome
     *
     * @ORM\Column(name="cognome", type="string", length=255)
     */
    private $cognome;

    /**
     * @var date $data_nascita
     *
     * @ORM\Column(name="data_nascita", type="date")
     */
    private $data_nascita;

    /**
     * @var string $luogo_nascita
     *
     * @ORM\Column(name="luogo_nascita", type="string", length=255)
     */
    private $luogo_nascita;

    /**
     * @var string $codice_fiscale
     *
     * @ORM\Column(name="codice_fiscale", type="string", length=255)
     */
    private $codice_fiscale;

    /**
     * @var string $ordine_numero
     *
     * @ORM\Column(name="ordine_numero", type="string", length=255)
     */
    private $ordine_numero;

    /**
     * @var string $ordine_citta
     *
     * @ORM\Column(name="ordine_citta", type="string", length=255)
     */
    private $ordine_citta;

    /**
     * @var string $indirizzo
     *
     * @ORM\Column(name="indirizzo", type="string", length=255)
     */
    private $indirizzo;

    /**
     * @var string $indirizzo_cap
     *
     * @ORM\Column(name="indirizzo_cap", type="string", length=255)
     */
    private $indirizzo_cap;

    /**
     * @var string $indirizzo_citta
     *
     * @ORM\Column(name="indirizzo_citta", type="string", length=255)
     */
    private $indirizzo_citta;

    /**
     * @var string $indirizzo_provincia
     *
     * @ORM\Column(name="indirizzo_provincia", type="string", length=255)
     */
    private $indirizzo_provincia;

    /**
     * @var string $telefono
     *
     * @ORM\Column(name="telefono", type="string", length=255)
     */
    private $telefono;

    /**
     * @var string $cellulare
     *
     * @ORM\Column(name="cellulare", type="string", length=255)
     */
    private $cellulare;

    /**
     * @var string $email
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string $professione
     *
     * @ORM\Column(name="professione", type="string", length=255)
     */
    private $professione;

    /**
     * @var string $disciplina
     *
     * @ORM\Column(name="disciplina", type="string", length=255)
     */
    private $disciplina;

    /**
     * @var string $qualifica
     *
     * @ORM\Column(name="qualifica", type="string", length=255)
     */
    private $qualifica;

    /**
     * @var boolean $sponsor
     *
     * @ORM\Column(name="sponsor", type="boolean")
     */
    private $sponsor;

    /**
     * @var string $sponsor_azienda
     *
     * @ORM\Column(name="sponsor_azienda", type="string", length=255)
     */
    private $sponsor_azienda;

    /**
     * @var boolean $privacy
     *
     * @ORM\Column(name="privacy", type="boolean")
     */
    private $privacy;


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
     * Set tipo_iscrizione
     *
     * @param string $tipoIscrizione
     */
    public function setTipoIscrizione($tipoIscrizione)
    {
        $this->tipo_iscrizione = $tipoIscrizione;
    }

    /**
     * Get tipo_iscrizione
     *
     * @return string 
     */
    public function getTipoIscrizione()
    {
        return $this->tipo_iscrizione;
    }

    /**
     * Set nome
     *
     * @param string $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * Get nome
     *
     * @return string 
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set cognome
     *
     * @param string $cognome
     */
    public function setCognome($cognome)
    {
        $this->cognome = $cognome;
    }

    /**
     * Get cognome
     *
     * @return string 
     */
    public function getCognome()
    {
        return $this->cognome;
    }

    /**
     * Set data_nascita
     *
     * @param date $dataNascita
     */
    public function setDataNascita($dataNascita)
    {
        $this->data_nascita = $dataNascita;
    }

    /**
     * Get data_nascita
     *
     * @return date 
     */
    public function getDataNascita()
    {
        return $this->data_nascita;
    }

    /**
     * Set luogo_nascita
     *
     * @param string $luogoNascita
     */
    public function setLuogoNascita($luogoNascita)
    {
        $this->luogo_nascita = $luogoNascita;
    }

    /**
     * Get luogo_nascita
     *
     * @return string 
     */
    public function getLuogoNascita()
    {
        return $this->luogo_nascita;
    }

    /**
     * Set codice_fiscale
     *
     * @param string $codiceFiscale
     */
    public function setCodiceFiscale($codiceFiscale)
    {
        $this->codice_fiscale = $codiceFiscale;
    }

    /**
     * Get codice_fiscale
     *
     * @return string 
     */
    public function getCodiceFiscale()
    {
        return $this->codice_fiscale;
    }

    /**
     * Set ordine_numero
     *
     * @param string $ordineNumero
     */
    public function setOrdineNumero($ordineNumero)
    {
        $this->ordine_numero = $ordineNumero;
    }

    /**
     * Get ordine_numero
     *
     * @return string 
     */
    public function getOrdineNumero()
    {
        return $this->ordine_numero;
    }

    /**
     * Set ordine_citta
     *
     * @param string $ordineCitta
     */
    public function setOrdineCitta($ordineCitta)
    {
        $this->ordine_citta = $ordineCitta;
    }

    /**
     * Get ordine_citta
     *
     * @return string 
     */
    public function getOrdineCitta()
    {
        return $this->ordine_citta;
    }

    /**
     * Set indirizzo
     *
     * @param string $indirizzo
     */
    public function setIndirizzo($indirizzo)
    {
        $this->indirizzo = $indirizzo;
    }

    /**
     * Get indirizzo
     *
     * @return string 
     */
    public function getIndirizzo()
    {
        return $this->indirizzo;
    }

    /**
     * Set indirizzo_cap
     *
     * @param string $indirizzoCap
     */
    public function setIndirizzoCap($indirizzoCap)
    {
        $this->indirizzo_cap = $indirizzoCap;
    }

    /**
     * Get indirizzo_cap
     *
     * @return string 
     */
    public function getIndirizzoCap()
    {
        return $this->indirizzo_cap;
    }

    /**
     * Set indirizzo_citta
     *
     * @param string $indirizzoCitta
     */
    public function setIndirizzoCitta($indirizzoCitta)
    {
        $this->indirizzo_citta = $indirizzoCitta;
    }

    /**
     * Get indirizzo_citta
     *
     * @return string 
     */
    public function getIndirizzoCitta()
    {
        return $this->indirizzo_citta;
    }

    /**
     * Set indirizzo_provincia
     *
     * @param string $indirizzoProvincia
     */
    public function setIndirizzoProvincia($indirizzoProvincia)
    {
        $this->indirizzo_provincia = $indirizzoProvincia;
    }

    /**
     * Get indirizzo_provincia
     *
     * @return string 
     */
    public function getIndirizzoProvincia()
    {
        return $this->indirizzo_provincia;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set cellulare
     *
     * @param string $cellulare
     */
    public function setCellulare($cellulare)
    {
        $this->cellulare = $cellulare;
    }

    /**
     * Get cellulare
     *
     * @return string 
     */
    public function getCellulare()
    {
        return $this->cellulare;
    }

    /**
     * Set email
     *
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set professione
     *
     * @param string $professione
     */
    public function setProfessione($professione)
    {
        $this->professione = $professione;
    }

    /**
     * Get professione
     *
     * @return string 
     */
    public function getProfessione()
    {
        return $this->professione;
    }

    /**
     * Set disciplina
     *
     * @param string $disciplina
     */
    public function setDisciplina($disciplina)
    {
        $this->disciplina = $disciplina;
    }

    /**
     * Get disciplina
     *
     * @return string 
     */
    public function getDisciplina()
    {
        return $this->disciplina;
    }

    /**
     * Set qualifica
     *
     * @param string $qualifica
     */
    public function setQualifica($qualifica)
    {
        $this->qualifica = $qualifica;
    }

    /**
     * Get qualifica
     *
     * @return string 
     */
    public function getQualifica()
    {
        return $this->qualifica;
    }

    /**
     * Set sponsor
     *
     * @param boolean $sponsor
     */
    public function setSponsor($sponsor)
    {
        $this->sponsor = $sponsor;
    }

    /**
     * Get sponsor
     *
     * @return boolean 
     */
    public function getSponsor()
    {
        return $this->sponsor;
    }

    /**
     * Set sponsor_azienda
     *
     * @param string $sponsorAzienda
     */
    public function setSponsorAzienda($sponsorAzienda)
    {
        $this->sponsor_azienda = $sponsorAzienda;
    }

    /**
     * Get sponsor_azienda
     *
     * @return string 
     */
    public function getSponsorAzienda()
    {
        return $this->sponsor_azienda;
    }

    /**
     * Set privacy
     *
     * @param boolean $privacy
     */
    public function setPrivacy($privacy)
    {
        $this->privacy = $privacy;
    }

    /**
     * Get privacy
     *
     * @return boolean 
     */
    public function getPrivacy()
    {
        return $this->privacy;
    }
}