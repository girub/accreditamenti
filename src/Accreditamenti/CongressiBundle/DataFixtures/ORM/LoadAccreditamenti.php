<?php

namespace Accreditamenti\CongressiBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Accreditamenti\CongressiBundle\Entity\Accreditamento;
use Accreditamenti\CongressiBundle\Entity\Congresso;

class LoadAccreditamenti implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {

        $congresso = new Congresso();
        $congresso->setTitolo('Congresso sulla pigna');
        $congresso->setCodiceCongresso('CONG-PIGN');
        $congresso->setUrl('http://www.yiinotes.com');
        $congresso->setDescrizione('Questo congresso sulla pigna parla di pigna');
        $congresso->setDataInizio(new \DateTime);
        $congresso->setDataFine(new \DateTime);
        $congresso->setLuogo('Cesena');
        $congresso->setRicezioneAbstract(false);
        $congresso->setPaginaSponsor('true');
        $congresso->setAbilitato(true);
        $manager->persist($congresso);

        $accrediamento = new Accreditamento();
        $accrediamento->setCongresso($congresso);
        $accrediamento->setTitolo('Accreditamento della pigna');
        $accrediamento->setNumeroAccreditamento('1241231');
        $accrediamento->setLuogo('Cesena');
        $accrediamento->setDataInizio(new \DateTime); // ???
        $accrediamento->setDataFine(new \DateTime);
        $accrediamento->setOreFormative(123);
        $accrediamento->setObiettivoFormativo('Obiettivo formativo');
        $accrediamento->setNumeroCrediti(33);
        $manager->persist($accrediamento);

        $manager->flush();
    }

}