<?php

namespace Accreditamenti\CongressiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\OneToMany;

/**
 * Accreditamenti\CongressiBundle\Entity\QuestionarioValutazione
 *
 * @ORM\Table(name="aim_questionario_valutazione")
 * @ORM\Entity(repositoryClass="Accreditamenti\CongressiBundle\Entity\QuestionarioValutazioneRepository")
 */
class QuestionarioValutazione extends Questionario {
    
}