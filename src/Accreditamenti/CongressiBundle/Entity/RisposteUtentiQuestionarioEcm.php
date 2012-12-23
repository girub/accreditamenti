<?php

namespace Accreditamenti\CongressiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Accreditamenti\CongressiBundle\Entity\RisposteUtentiQuestionarioEcm
 *
 * @ORM\Table(name="aim_risposte_utenti_questionario_ecm")
 * @ORM\Entity(repositoryClass="Accreditamenti\CongressiBundle\Entity\RisposteUtentiQuestionarioEcmRepository")
 */
class RisposteUtentiQuestionarioEcm
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
     * @var integer $risposta_id
     *
     * @ORM\Column(name="risposta_id", type="integer")
     */
    private $risposta_id;


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
     * Set risposta_id
     *
     * @param integer $rispostaId
     */
    public function setRispostaId($rispostaId)
    {
        $this->risposta_id = $rispostaId;
    }

    /**
     * Get risposta_id
     *
     * @return integer 
     */
    public function getRispostaId()
    {
        return $this->risposta_id;
    }
}