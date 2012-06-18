<?php

namespace Accreditamenti\CongressiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Accreditamenti\CongressiBundle\Entity\QuestionarioEcm
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Accreditamenti\CongressiBundle\Entity\QuestionarioEcmRepository")
 */
class QuestionarioEcm
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
     * @var date $data_inizio_compilazione
     *
     * @ORM\Column(name="data_inizio_compilazione", type="date")
     */
    private $data_inizio_compilazione;

    /**
     * @var date $data_fine_compilazione
     *
     * @ORM\Column(name="data_fine_compilazione", type="date")
     */
    private $data_fine_compilazione;

    /**
     * @var float $percentuale_risposte_esatte
     *
     * @ORM\Column(name="percentuale_risposte_esatte", type="float")
     */
    private $percentuale_risposte_esatte;

    /**
     * @var integer $numero_tentativi_compilazione
     *
     * @ORM\Column(name="numero_tentativi_compilazione", type="integer")
     */
    private $numero_tentativi_compilazione;

    /**
     * @var integer $accreditamento_id
     *
     * @ORM\Column(name="accreditamento_id", type="integer")
     */
    private $accreditamento_id;


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
     * Set data_inizio_compilazione
     *
     * @param date $dataInizioCompilazione
     */
    public function setDataInizioCompilazione($dataInizioCompilazione)
    {
        $this->data_inizio_compilazione = $dataInizioCompilazione;
    }

    /**
     * Get data_inizio_compilazione
     *
     * @return date 
     */
    public function getDataInizioCompilazione()
    {
        return $this->data_inizio_compilazione;
    }

    /**
     * Set data_fine_compilazione
     *
     * @param date $dataFineCompilazione
     */
    public function setDataFineCompilazione($dataFineCompilazione)
    {
        $this->data_fine_compilazione = $dataFineCompilazione;
    }

    /**
     * Get data_fine_compilazione
     *
     * @return date 
     */
    public function getDataFineCompilazione()
    {
        return $this->data_fine_compilazione;
    }

    /**
     * Set percentuale_risposte_esatte
     *
     * @param float $percentualeRisposteEsatte
     */
    public function setPercentualeRisposteEsatte($percentualeRisposteEsatte)
    {
        $this->percentuale_risposte_esatte = $percentualeRisposteEsatte;
    }

    /**
     * Get percentuale_risposte_esatte
     *
     * @return float 
     */
    public function getPercentualeRisposteEsatte()
    {
        return $this->percentuale_risposte_esatte;
    }

    /**
     * Set numero_tentativi_compilazione
     *
     * @param integer $numeroTentativiCompilazione
     */
    public function setNumeroTentativiCompilazione($numeroTentativiCompilazione)
    {
        $this->numero_tentativi_compilazione = $numeroTentativiCompilazione;
    }

    /**
     * Get numero_tentativi_compilazione
     *
     * @return integer 
     */
    public function getNumeroTentativiCompilazione()
    {
        return $this->numero_tentativi_compilazione;
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
}