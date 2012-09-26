<?php

namespace Accreditamenti\CongressiBundle\Features\Context;

use Behat\BehatBundle\Context\BehatContext,
    Behat\BehatBundle\Context\MinkContext;
use Behat\Behat\Context\ClosuredContextInterface,
    Behat\Behat\Context\TranslatedContextInterface,
    Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;
use Accreditamenti\CongressiBundle\Entity\Iscritti;

//
// Require 3rd-party libraries here:
//
//   require_once 'PHPUnit/Autoload.php';
//   require_once 'PHPUnit/Framework/Assert/Functions.php';
//

/**
 * Feature context.
 */
class FeatureContext extends MinkContext {

    /**
     * @Given /^last accreditamento has "([^"]*)" "([^"]*)" "([^"]*)" "([^"]*)" as attendee$/
     */
    public function lastAccreditamentoHasAsAttendee($cognome, $nome, $codiceFiscale, $tipologiaIscritto) {

        $em = $this->getContainer()->get('doctrine.orm.entity_manager');
        $query = $em->createQuery(
                        'SELECT p FROM AccreditamentiCongressiBundle:Accreditamento p
                         ORDER BY p.id DESC')->setMaxResults(1);
        $accreditamento = $query->getResult();

        $iscritto = new Iscritti();
        $iscritto->setNome($nome);
        $iscritto->setCognome($cognome);
        $iscritto->setCodiceFiscale($codiceFiscale);
        $iscritto->setTipologiaIscritto($tipologiaIscritto);
        $iscritto->setAccreditamento($accreditamento[0]);

        $em->persist($iscritto);
        $em->flush();
    }

}
