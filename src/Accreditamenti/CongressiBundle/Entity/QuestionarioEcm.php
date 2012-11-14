<?php

namespace Accreditamenti\CongressiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\OneToMany;

/**
 * Accreditamenti\CongressiBundle\Entity\QuestionarioEcm
 *
 * @ORM\Table(name="aim_questionarioecm")
 * @ORM\Entity(repositoryClass="Accreditamenti\CongressiBundle\Entity\QuestionarioEcmRepository")
 */
class QuestionarioEcm extends Questionario {

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
     * Set percentuale_risposte_esatte
     *
     * @param float $percentualeRisposteEsatte
     */
    public function setPercentualeRisposteEsatte($percentualeRisposteEsatte) {
        $this->percentuale_risposte_esatte = $percentualeRisposteEsatte;
    }

    /**
     * Get percentuale_risposte_esatte
     *
     * @return float 
     */
    public function getPercentualeRisposteEsatte() {
        return $this->percentuale_risposte_esatte;
    }

    /**
     * Set numero_tentativi_compilazione
     *
     * @param integer $numeroTentativiCompilazione
     */
    public function setNumeroTentativiCompilazione($numeroTentativiCompilazione) {
        $this->numero_tentativi_compilazione = $numeroTentativiCompilazione;
    }

    /**
     * Get numero_tentativi_compilazione
     *
     * @return integer 
     */
    public function getNumeroTentativiCompilazione() {
        return $this->numero_tentativi_compilazione;
    }
    
    

}