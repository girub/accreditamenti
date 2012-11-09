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
class Disciplina
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
     * @var string $titolo_disciplina
     *
     * @ORM\Column(name="titolo_disciplina", type="string", length=255)
     */
    private $titolo_disciplina;
   
    
   
    
    /**
     * @ManyToOne(targetEntity="Professione", inversedBy="disciplina")
     * @JoinColumn(name="professione_id", referencedColumnName="id")
     */
    private $professione;
    
    

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
     * Set titolo_disciplina
     *
     * @param string $titoloDisciplina
     */
    public function setTitoloDisciplina($titoloDisciplina)
    {
        $this->titolo_disciplina = $titoloDisciplina;
    }

    /**
     * Get titolo_disciplina
     *
     * @return string 
     */
    public function getTitoloDisciplina()
    {
        return $this->titolo_disciplina;
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