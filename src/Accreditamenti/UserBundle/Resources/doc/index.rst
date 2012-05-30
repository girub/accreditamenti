Le guide del Prof
=================

Questo è un piccolo promemoria che ti lascio così se ti dimentichi qualche cosa,
la puoi ritrovare sempre qui dentro. Questo vale anche per il futuro.

Git
===

...

Inizializzare behat per testare un bundle
=========================================

Per inizializzare un Bundle in modo tale che possa funzionare con Behat, bisogna
bisogna lanciare il seguente comando:

    $ php app/console --env=test behat --init @AccreditamentiUserBundle

Dopo di chè, per lanciare behat:

    $ php app/console --env=test behat @AccreditamentiUserBundle

o in alternativa

    $ ./app/console --env=test behat @AccreditamentiUserBundle

Caricare i dati di default nel database
=======================================

E' possibile caricare dei record di default nel database. Questi prendono il nome
di fixtures. Ci sono anche in Yii. In pratica con il comando

    $ php app/console doctrine:fixtures:load

Vengono ricercare le fixtures di tutti i bundle. Nel nostro caso le fixtures creano
l'utente admin:

    Accreditamenti\UserBundle\DataFixtures\ORM\LoadUserData::load(ObjectManager $manager);

ovvero:

    $userAdmin = new User();

    $userAdmin->setUsername('admin');

    $userAdmin->setPassword('admin');

    $userAdmin->setEmail('giuseppe.rubino@gmail.com');

    $manager->persist($userAdmin);

    $manager->flush();

User roles
==========

E' possibile promuovere un utente ad un determinato ruolo con il comando:

    $ php app/console fos:user:promote

Ci verrà chiesto il nome dell'utente da promuovere ed il nome del ruolo al quale
deve essere promosso.

Twig e FOSUserBundle
====================

Per integrare il FOSUser alla nostra applicazione dobbiamo modificare il
template del FOSUser. Per prima cosa, dibbiamo ricordarci di dire al nostro
UserBundle che il suo "padre" è FOSUserBundle.

    <?php

    namespace Accreditamenti\UserBundle;

    use Symfony\Component\HttpKernel\Bundle\Bundle;

    class AccreditamentiUserBundle extends Bundle
    {
        public function getParent()
        {
            return 'FOSUserBundle';
        }

    }

A questo punto possiamo sovrascrivere i template del padre. In particolare
possiamo dovrascrivere immediatamente

    src/Accreditamenti/Resoureces/views/layout.html.twig

ed al suo interno immettere questo codice:

    {% extends '::base.html.twig' %}

    {% block body %}

        {{ block('fos_user_content') }}

    {% endblock %}