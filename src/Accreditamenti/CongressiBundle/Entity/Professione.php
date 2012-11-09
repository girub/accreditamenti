<?php

namespace Accreditamenti\CongressiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\OneToMany;

/**
 * Accreditamenti\CongressiBundle\Entity\Professione
 *
 * @ORM\Table()
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
     * @var string $titolo_professione
     *
     * @ORM\Column(name="titolo_professione", type="string", length=255)
     */
    private $titolo_professione;

    
    /**
     * @OneToMany(targetEntity="Disciplina", mappedBy="professione")
     */
    private $disciplina;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

   
    public function __construct()
    {
        $this->disciplina = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Set titolo_professione
     *
     * @param string $titoloProfessione
     */
    public function setTitoloProfessione($titoloProfessione)
    {
        $this->titolo_professione = $titoloProfessione;
    }

    /**
     * Get titolo_professione
     *
     * @return string 
     */
    public function getTitoloProfessione()
    {
        return $this->titolo_professione;
    }

    /**
     * Add disciplina
     *
     * @param Accreditamenti\CongressiBundle\Entity\Disciplina $disciplina
     */
    public function addDisciplina(\Accreditamenti\CongressiBundle\Entity\Disciplina $disciplina)
    {
        $this->disciplina[] = $disciplina;
    }

    /**
     * Get disciplina
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getDisciplina()
    {
        return $this->disciplina;
    }
}