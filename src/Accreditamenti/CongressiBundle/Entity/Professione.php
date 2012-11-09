<?php

namespace Accreditamenti\CongressiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Accreditamenti\CongressiBundle\Entity\Professione
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Accreditamenti\CongressiBundle\Entity\ProfessioneRepository")
 */
class Professione
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
     * @var string $professione
     *
     * @ORM\Column(name="professione", type="string", length=255)
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
}