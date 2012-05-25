<?php

namespace Accreditamenti\UserBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Accreditamenti\UserBundle\Entity\User;

class LoadUserData implements FixtureInterface {

    public function load(ObjectManager $manager) {
        $uenti = array(
            'admin',
            'guest',
            'giuseppe'
        );

        foreach ($uenti as $username) {
            $user = new User();
            $user->setUsername($username);
            $user->setPassword($username);
            $user->setEmail("$username@$username.com");
            $manager->persist($user);
            $manager->flush();
        }
    }

}