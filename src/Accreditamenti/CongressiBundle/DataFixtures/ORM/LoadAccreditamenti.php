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

        $questionarioECM = new QuestionarioEcm();
        $questionarioECM->setAccreditamento($accreditamentoDellaPigna);
        $questionarioECM->setAccreditamentoId($accreditamentoDellaPigna->getId());
        $questionarioECM->setDescrizione('Descrizione del secondo questionario ECM');
        $questionarioECM->setDataInizioCompilazione(new \DateTime);
        $questionarioECM->setDataFineCompilazione(new \DateTime);
        $questionarioECM->setPercentualeRisposteEsatte(33);
        $questionarioECM->setNumeroTentativiCompilazione(3);
        $manager->persist($questionarioECM);

        $domanda = new Domanda();
        $domanda->setDescrizione("Questa è la descrizione della domanda");
        $domanda->setQuestionarioecm($questionarioECM);
        $manager->persist($domanda);
        
        $risposta = new Risposta();
        $risposta->setDomanda($domanda);
        $risposta->setDescrizione("Questa risposta è vera");
        $risposta->setVero(true);
        $manager->persist($risposta);
        
        $risposta = new Risposta();
        $risposta->setDomanda($domanda);
        $risposta->setDescrizione("Questa risposta è falsa");
        $risposta->setVero(false);
        $manager->persist($risposta);
        
        $iscritto = new Iscritti();
        $iscritto->setAccreditamento($accreditamentoDellaPigna);
        $iscritto->setCognome('RUBINO');
        $iscritto->setNome('GIUSEPPE');
        $iscritto->setCodiceFiscale('RBNGPP74B15E882U');
        $iscritto->setTipologiaIscritto(Iscritti::PARTECIPANTE);
        $manager->persist($iscritto);

        $iscritto = new Iscritti();
        $iscritto->setAccreditamento($accreditamentoDellaPigna);
        $iscritto->setCognome('GENTILI');
        $iscritto->setNome('SIMONE');
        $iscritto->setCodiceFiscale('GNTSMN82P10C573Q');
        $iscritto->setTipologiaIscritto(Iscritti::PARTECIPANTE);
        $manager->persist($iscritto);
        
        $manager->flush();
    }

}