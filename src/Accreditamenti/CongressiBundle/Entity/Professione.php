<?php

namespace Accreditamenti\CongressiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\OneToMany;

use Accreditamenti\CongressiBundle\Entity\Disciplina;

/**
 * Accreditamenti\CongressiBundle\Entity\Professione
 *
 * @ORM\Table(name="aim_professione")
 * @ORM\Entity(repositoryClass="Accreditamenti\CongressiBundle\Entity\ProfessioneRepository")
 */
class Professione {

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
     * @OneToMany(targetEntity="Disciplina", mappedBy="professione")
     */

    private $discipline;

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

}