<?php

namespace Accreditamenti\UserBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Accreditamenti\UserBundle\Entity\User;

class LoadUserData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $userAdmin = new User();
        $userAdmin->setUsername('admin');
        $userAdmin->setPassword('admin');
        $userAdmin->setEmail('giuseppe.rubino@gmail.com');

        $manager->persist($userAdmin);
        $manager->flush();
    }

}