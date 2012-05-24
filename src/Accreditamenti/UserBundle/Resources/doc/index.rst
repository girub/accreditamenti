Le guide del Prof
=================

Questo è un piccolo promemoria che ti lascio così se ti dimentichi qualche cosa,
la puoi ritrovare sempre qui dentro. Questo vale anche per il futuro.

Inizializzare behat per un bundle
=================================

Per inizializzare un Bundle in modo tale che possa funzionare con Behat, bisogna
bisogna lanciare il seguente comando:

    $ php app/console --env=test behat --init @AccreditamentiUserBundle

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