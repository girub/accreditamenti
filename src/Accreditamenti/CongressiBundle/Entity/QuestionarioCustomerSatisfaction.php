<?php

namespace Accreditamenti\CongressiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\OneToMany;

/**
 * Accreditamenti\CongressiBundle\Entity\QuestionarioCustomerSatisfaction
 *
 * @ORM\Table(name="aim_questionario_customer_satisfaction")
 * @ORM\Entity(repositoryClass="Accreditamenti\CongressiBundle\Entity\QuestionarioCustomerSatisfactionRepository")
 */
class QuestionarioCustomerSatisfaction extends Questionario {
    
}