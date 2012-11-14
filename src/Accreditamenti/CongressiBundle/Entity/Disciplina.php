<?php

namespace Accreditamenti\CongressiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;

/**
 * Accreditamenti\CongressiBundle\Entity\Disciplina
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Accreditamenti\CongressiBundle\Entity\DisciplinaRepository")
 */
class Disciplina {

    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer $codice
     *
     * @ORM\Column(name="codice", type="integer")
     */
    private $codice;

    /**
     * @var string $nome
     *
     * @ORM\Column(name="nome", type="string", length=255)
     */
    private $nome;

    /**
     * @ManyToOne(targetEntity="Professione", inversedBy="discipline")
     * @JoinColumn(name="professione_id", referencedColumnName="id")
     */
    private $professione;
    
    

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set codice
     *
     * @param integer $codice
     */
    public function setCodice($codice) {
        $this->codice = $codice;
    }

    /**
     * Get codice
     *
     * @return integer 
     */
    public function getCodice() {
        return $this->codice;
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
     * Set professione
     *
     * @param Accreditamenti\CongressiBundle\Entity\Professione $professione
     */
    public function setProfessione(\Accreditamenti\CongressiBundle\Entity\Professione $professione)
    {
        $this->professione = $professione;
    }

    /**
     * Get professione
     *
     * @return Accreditamenti\CongressiBundle\Entity\Professione 
     */
    public function getProfessione()
    {
        return $this->professione;
    }
}