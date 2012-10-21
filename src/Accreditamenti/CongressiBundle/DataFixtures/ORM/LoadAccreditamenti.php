<?php

namespace Accreditamenti\CongressiBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Accreditamenti\CongressiBundle\Entity\Accreditamento;
use Accreditamenti\CongressiBundle\Entity\Congresso;
use Accreditamenti\CongressiBundle\Entity\Domanda;
use Accreditamenti\CongressiBundle\Entity\Risposta;
use Accreditamenti\CongressiBundle\Entity\QuestionarioEcm;
use Accreditamenti\CongressiBundle\Entity\Iscritti;

class LoadAccreditamenti implements FixtureInterface {

    public function load(ObjectManager $manager) {

        $congressoSullaPigna = new Congresso();
        $congressoSullaPigna->setTitolo('Congresso sulla pigna');
        $congressoSullaPigna->setCodiceCongresso('CONG-PIGN');
        $congressoSullaPigna->setUrl('http://www.yiinotes.com');
        $congressoSullaPigna->setDescrizione('Questo congresso sulla pigna parla di pigna');
        $congressoSullaPigna->setDataInizio(new \DateTime("+3 day"));
        $congressoSullaPigna->setDataFine(new \DateTime("+4 day"));
        $congressoSullaPigna->setLuogo('Cesena');
        $congressoSullaPigna->setRicezioneAbstract(false);
        $congressoSullaPigna->setPaginaSponsor('true');
        $congressoSullaPigna->setAbilitato(true);
        $manager->persist($congressoSullaPigna);

        $accreditamentoDellaPigna = new Accreditamento();
        $accreditamentoDellaPigna->setCongresso($congressoSullaPigna);
        $accreditamentoDellaPigna->setTitolo('Accreditamento della pigna');
        $accreditamentoDellaPigna->setNumeroAccreditamento('1241231');
        $accreditamentoDellaPigna->setLuogo('Cesena');
        $accreditamentoDellaPigna->setDataInizio(new \DateTime);
        $accreditamentoDellaPigna->setDataFine(new \DateTime);
        $accreditamentoDellaPigna->setOreFormative(123);
        $accreditamentoDellaPigna->setObiettivoFormativo('Obiettivo formativo');
        $accreditamentoDellaPigna->setNumeroCrediti(33);
        $manager->persist($accreditamentoDellaPigna);

        $questionarioECM = new QuestionarioEcm();
        $questionarioECM->setAccreditamento($accreditamentoDellaPigna);
        $questionarioECM->setAccreditamentoId($accreditamentoDellaPigna->getId());
        $questionarioECM->setDescrizione('Descrizione del primo questionario ECM');
        $questionarioECM->setDataInizioCompilazione(new \DateTime);
        $questionarioECM->setDataFineCompilazione(new \DateTime);
        $questionarioECM->setPercentualeRisposteEsatte(33);
        $questionarioECM->setNumeroTentativiCompilazione(3);
        $manager->persist($questionarioECM);

        $primaDomanda = new Domanda();
        $primaDomanda->setDescrizione("Di che colore era il cavallo bianco di Napoleone");
        $primaDomanda->setQuestionarioecm($questionarioECM);
        $manager->persist($primaDomanda);
        
        $primaRisposta = new Risposta();
        $primaRisposta->setDomanda($primaDomanda);
        $primaRisposta->setDescrizione("Bianco");
        $primaRisposta->setVero(true);
        $manager->persist($primaRisposta);
        
        $secondaRisposta = new Risposta();
        $secondaRisposta->setDomanda($primaDomanda);
        $secondaRisposta->setDescrizione("Verde");
        $secondaRisposta->setVero(false);
        $manager->persist($secondaRisposta);

        $secondaDomanda = new Domanda();
        $secondaDomanda->setDescrizione("Quanti sono i sette nani");
        $secondaDomanda->setQuestionarioecm($questionarioECM);
        $manager->persist($secondaDomanda);
        
        $primaRispostaSecondaDomanda = new Risposta();
        $primaRispostaSecondaDomanda->setDomanda($secondaDomanda);
        $primaRispostaSecondaDomanda->setDescrizione("Sono 7");
        $primaRispostaSecondaDomanda->setVero(true);
        $manager->persist($primaRispostaSecondaDomanda);
        
        $secondaRispostaSecondaDomanda = new Risposta();
        $secondaRispostaSecondaDomanda->setDomanda($secondaDomanda);
        $secondaRispostaSecondaDomanda->setDescrizione("49");
        $secondaRispostaSecondaDomanda->setVero(false);
        $manager->persist($secondaRispostaSecondaDomanda);
        
        $primoIscritto = new Iscritti();
        $primoIscritto->setAccreditamento($accreditamentoDellaPigna);
        $primoIscritto->setCognome('RUBINO');
        $primoIscritto->setNome('GIUSEPPE');
        $primoIscritto->setCodiceFiscale('RBNGPP74B15E882U');
        $primoIscritto->setTipologiaIscritto(Iscritti::PARTECIPANTE);
        $manager->persist($primoIscritto);

        $secondoIscritto = new Iscritti();
        $secondoIscritto->setAccreditamento($accreditamentoDellaPigna);
        $secondoIscritto->setCognome('GENTILI');
        $secondoIscritto->setNome('SIMONE');
        $secondoIscritto->setCodiceFiscale('GNTSMN82P10C573Q');
        $secondoIscritto->setTipologiaIscritto(Iscritti::PARTECIPANTE);
        $manager->persist($secondoIscritto);
        
        $manager->flush();
    }

}