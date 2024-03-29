<?php

namespace Accreditamenti\CongressiBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Accreditamenti\CongressiBundle\Entity\Domanda;

/**
 * RispostaRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class RispostaRepository extends EntityRepository {

    public function findByDomanda(Domanda $domanda) {
        return $this->createQueryBuilder('r')
                        ->join('r.getDomanda', 'domanda')
                        ->where('r.domanda = :domanda')
                        ->setParameter('domanda', $domanda)
                        ->getQuery()
                        ->getResult();
    }

}