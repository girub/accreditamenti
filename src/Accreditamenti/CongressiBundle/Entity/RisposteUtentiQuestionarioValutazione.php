<?php

namespace Accreditamenti\CongressiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Accreditamenti\CongressiBundle\Entity\RisposteUtentiQuestionarioValutazione
 *
 * @ORM\Table(name="aim_risposte_utenti_questionario_valutazione")
 * @ORM\Entity(repositoryClass="Accreditamenti\CongressiBundle\Entity\RisposteUtentiQuestionarioValutazioneRepository")
 */
class RisposteUtentiQuestionarioValutazione
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
     * @var integer $anagrafica_id
     *
     * @ORM\Column(name="anagrafica_id", type="integer")
     */
    private $anagrafica_id;

    /**
     * @var integer $accreditamento_id
     *
     * @ORM\Column(name="accreditamento_id", type="integer")
     */
    private $accreditamento_id;

    /**
     * @var string $rilevanza_degli_argomenti
     *
     * @ORM\Column(name="rilevanza_degli_argomenti", type="string", length=255)
     */
    private $rilevanza_degli_argomenti;

    /**
     * @var string $qualita_educativa
     *
     * @ORM\Column(name="qualita_educativa", type="string", length=255)
     */
    private $qualita_educativa;

    /**
     * @var string $utilita_evento
     *
     * @ORM\Column(name="utilita_evento", type="string", length=255)
     */
    private $utilita_evento;

    /**
     * @var string $influenza_sponsor
     *
     * @ORM\Column(name="influenza_sponsor", type="string", length=255)
     */
    private $influenza_sponsor;

    /**
     * @var string $esempio_influenza_sponsor
     *
     * @ORM\Column(name="esempio_influenza_sponsor", nullable=true, type="string", length=255)
     */
    private $esempio_influenza_sponsor;


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
     * Set anagrafica_id
     *
     * @param integer $anagraficaId
     */
    public function setAnagraficaId($anagraficaId)
    {
        $this->anagrafica_id = $anagraficaId;
    }

    /**
     * Get anagrafica_id
     *
     * @return integer 
     */
    public function getAnagraficaId()
    {
        return $this->anagrafica_id;
    }

    /**
     * Set accreditamento_id
     *
     * @param integer $accreditamentoId
     */
    public function setAccreditamentoId($accreditamentoId)
    {
        $this->accreditamento_id = $accreditamentoId;
    }

    /**
     * Get accreditamento_id
     *
     * @return integer 
     */
    public function getAccreditamentoId()
    {
        return $this->accreditamento_id;
    }

    /**
     * Set rilevanza_degli_argomenti
     *
     * @param string $rilevanzaDegliArgomenti
     */
    public function setRilevanzaDegliArgomenti($rilevanzaDegliArgomenti)
    {
        $this->rilevanza_degli_argomenti = $rilevanzaDegliArgomenti;
    }

    /**
     * Get rilevanza_degli_argomenti
     *
     * @return string 
     */
    public function getRilevanzaDegliArgomenti()
    {
        return $this->rilevanza_degli_argomenti;
    }

    /**
     * Set qualita_educativa
     *
     * @param string $qualitaEducativa
     */
    public function setQualitaEducativa($qualitaEducativa)
    {
        $this->qualita_educativa = $qualitaEducativa;
    }

    /**
     * Get qualita_educativa
     *
     * @return string 
     */
    public function getQualitaEducativa()
    {
        return $this->qualita_educativa;
    }

    /**
     * Set utilita_evento
     *
     * @param string $utilitaEvento
     */
    public function setUtilitaEvento($utilitaEvento)
    {
        $this->utilita_evento = $utilitaEvento;
    }

    /**
     * Get utilita_evento
     *
     * @return string 
     */
    public function getUtilitaEvento()
    {
        return $this->utilita_evento;
    }

    /**
     * Set influenza_sponsor
     *
     * @param string $influenzaSponsor
     */
    public function setInfluenzaSponsor($influenzaSponsor)
    {
        $this->influenza_sponsor = $influenzaSponsor;
    }

    /**
     * Get influenza_sponsor
     *
     * @return string 
     */
    public function getInfluenzaSponsor()
    {
        return $this->influenza_sponsor;
    }

    /**
     * Set esempio_influenza_sponsor
     *
     * @param string $esempioInfluenzaSponsor
     */
    public function setEsempioInfluenzaSponsor($esempioInfluenzaSponsor)
    {
        $this->esempio_influenza_sponsor = $esempioInfluenzaSponsor;
    }

    /**
     * Get esempio_influenza_sponsor
     *
     * @return string 
     */
    public function getEsempioInfluenzaSponsor()
    {
        return $this->esempio_influenza_sponsor;
    }
}