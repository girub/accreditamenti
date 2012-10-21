<?php

namespace Accreditamenti\CongressiBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Accreditamenti\CongressiBundle\Entity\Accreditamento;
use Accreditamenti\CongressiBundle\Entity\Congresso;
use Accreditamenti\CongressiBundle\Entity\Domanda;
use Accreditamenti\CongressiBundle\Entity\QuestionarioEcm;
use Accreditamenti\CongressiBundle\Entity\Iscritti;

class LoadAccreditamenti implements FixtureInterface {

    public function load(ObjectManager $manager) {

        $cong = new Congresso();
        $cong->setTitolo('Congresso sulla pigna');
        $cong->setCodiceCongresso('CONG-PIGN');
        $cong->setUrl('http://www.yiinotes.com');
        $cong->setDescrizione('Questo congresso sulla pigna parla di pigna');
        $cong->setDataInizio(new \DateTime("+3 day"));
        $cong->setDataFine(new \DateTime("+4 day"));
        $cong->setLuogo('Cesena');
        $cong->setRicezioneAbstract(false);
        $cong->setPaginaSponsor('true');
        $cong->setAbilitato(true);
        $manager->persist($cong);

        $acc = new Accreditamento();
        $acc->setCongresso($cong);
        $acc->setTitolo('Accreditamento della pigna');
        $acc->setNumeroAccreditamento('1241231');
        $acc->setLuogo('Cesena');
        $acc->setDataInizio(new \DateTime);
        $acc->setDataFine(new \DateTime);
        $acc->setOreFormative(123);
        $acc->setObiettivoFormativo('Obiettivo formativo');
        $acc->setNumeroCrediti(33);
        $manager->persist($acc);

        $quest = new QuestionarioEcm();
        $quest->setAccreditamento($acc);
        $quest->setAccreditamentoId($acc->getId());
        $quest->setDescrizione('Descrizione del primo questionario ECM');
        $quest->setDataInizioCompilazione(new \DateTime);
        $quest->setDataFineCompilazione(new \DateTime);
        $quest->setPercentualeRisposteEsatte(33);
        $quest->setNumeroTentativiCompilazione(3);
        $manager->persist($quest);

        $quest = new QuestionarioEcm();
        $quest->setAccreditamento($acc);
        $quest->setAccreditamentoId($acc->getId());
        $quest->setDescrizione('Descrizione del secondo questionario ECM');
        $quest->setDataInizioCompilazione(new \DateTime);
        $quest->setDataFineCompilazione(new \DateTime);
        $quest->setPercentualeRisposteEsatte(33);
        $quest->setNumeroTentativiCompilazione(3);
        $manager->persist($quest);

        $iscritti = new Iscritti();
        $iscritti->setAccreditamento($acc);
        $iscritti->setCognome('RUBINO');
        $iscritti->setNome('GIUSEPPE');
        $iscritti->setCodiceFiscale('RBNGPP74B15E882U');
        $iscritti->setTipologiaIscritto(Iscritti::PARTECIPANTE);
        $manager->persist($iscritti);

        $iscritti = new Iscritti();
        $iscritti->setAccreditamento($acc);
        $iscritti->setCognome('GENTILI');
        $iscritti->setNome('SIMONE');
        $iscritti->setCodiceFiscale('GNTSMN82P10C573Q');
        $iscritti->setTipologiaIscritto(Iscritti::PARTECIPANTE);
        $manager->persist($iscritti);
        
        $manager->flush();
    }

}