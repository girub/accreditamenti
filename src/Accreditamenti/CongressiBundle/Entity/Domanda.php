<?php

namespace Accreditamenti\CongressiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\OneToMany;

/**
 * Accreditamenti\CongressiBundle\Entity\Domanda
 *
 * @ORM\Table(name="aim_domanda")
 * @ORM\Entity(repositoryClass="Accreditamenti\CongressiBundle\Entity\DomandaRepository")
 */
class Domanda {

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
     * @ManyToOne(targetEntity="QuestionarioEcm", inversedBy="domanda")
     * @JoinColumn(name="questionarioecm_id", referencedColumnName="id")
     */
    private $questionarioecm;

    /**
     * @ManyToOne(targetEntity="QuestionarioCustomerSatisfaction", inversedBy="domanda")
     * @JoinColumn(name="questionario_cs_id", referencedColumnName="id")
     */
    private $questionarioCustomerSatisfaction;

    
    /**
     * @ManyToOne(targetEntity="QuestionarioValutazione", inversedBy="domanda")
     * @JoinColumn(name="questionario_valutazione_id", referencedColumnName="id")
     */
    private $questionarioValutazione;

    
    
    
    
    /**
     * @OneToMany(targetEntity="Risposta", mappedBy="domanda")
     */
    private $risposta;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set descrizione
     *
     * @param string $descrizione
     */
    public function setDescrizione($descrizione) {
        $this->descrizione = $descrizione;
    }

    /**
     * Get descrizione
     *
     * @return string 
     */
    public function getDescrizione() {
        return $this->descrizione;
    }

    /**
     * Set questionarioecm
     *
     * @param Accreditamenti\CongressiBundle\Entity\QuestionarioEcm $questionarioecm
     */
    public function setQuestionarioecm(\Accreditamenti\CongressiBundle\Entity\QuestionarioEcm $questionarioecm) {
        $this->questionarioecm = $questionarioecm;
    }

    /**
     * Get questionarioecm
     *
     * @return Accreditamenti\CongressiBundle\Entity\QuestionarioEcm 
     */
    public function getQuestionarioEcm() {
        return $this->questionarioecm;
    }

    
    
    public function __toString() {
        return $this->getDescrizione();
    }

    public function __construct()
    {
        $this->risposta = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add risposta
     *
     * @param Accreditamenti\CongressiBundle\Entity\Risposta $risposta
     */
    public function addRisposta(\Accreditamenti\CongressiBundle\Entity\Risposta $risposta)
    {
        $this->risposta[] = $risposta;
    }

    /**
     * Get risposta
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getRisposta()
    {
        return $this->risposta;
    }

    /**
     * Set questionarioCustomerSatisfaction
     *
     * @param Accreditamenti\CongressiBundle\Entity\QuestionarioCustomerSatisfaction $questionarioCustomerSatisfaction
     */
    public function setQuestionarioCustomerSatisfaction(\Accreditamenti\CongressiBundle\Entity\QuestionarioCustomerSatisfaction $questionarioCustomerSatisfaction)
    {
        $this->questionarioCustomerSatisfaction = $questionarioCustomerSatisfaction;
    }

    /**
     * Get questionarioCustomerSatisfaction
     *
     * @return Accreditamenti\CongressiBundle\Entity\QuestionarioCustomerSatisfaction 
     */
    public function getQuestionarioCustomerSatisfaction()
    {
        return $this->questionarioCustomerSatisfaction;
    }

    /**
     * Set questionarioValutazione
     *
     * @param Accreditamenti\CongressiBundle\Entity\QuestionarioValutazione $questionarioValutazione
     */
    public function setQuestionarioValutazione(\Accreditamenti\CongressiBundle\Entity\QuestionarioValutazione $questionarioValutazione)
    {
        $this->questionarioValutazione = $questionarioValutazione;
    }

    /**
     * Get questionarioValutazione
     *
     * @return Accreditamenti\CongressiBundle\Entity\QuestionarioValutazione 
     */
    public function getQuestionarioValutazione()
    {
        return $this->questionarioValutazione;
    }
}