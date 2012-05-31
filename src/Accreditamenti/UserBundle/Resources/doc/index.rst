Le guide del Prof
=================

Questo è un piccolo promemoria che ti lascio così se ti dimentichi qualche cosa,
la puoi ritrovare sempre qui dentro. Questo vale anche per il futuro.

Git
===

In questo progetto, stiamo lavorando con un repository creato su **github**.
Quindi la prima cosa da fare, è posizionarsi 
nella cartella del progetto e lanciare il comando:

::

    $ cd /var/www/accreditamenti
    $ git pull origin master

Se ci sono dei file modificati, il sistema mi comunica quali sono i file ed
anche quante righe sono state modifcate. Ecco un esempio:

::

    $ cd /var/www/accreditamenti/
    $ git pull origin master 
    remote: Counting objects: 91, done.
    remote: Compressing objects: 100% (35/35), done.
    remote: Total 66 (delta 28), reused 58 (delta 20)
    Unpacking objects: 100% (66/66), done.
    From github.com:girub/accreditamenti
    * branch            master     -> FETCH_HEAD
    Updating 1305b3c..a95907f
    Fast-forward
    app/Resources/views/base.html.twig                 |   16 +++----
    app/config/config_behat.yml                        |    9 ++++
    app/config/config_test.yml                         |    4 ++
    .../Features/Context/FeatureContext.php            |   25 +++++++++++
    .../CongressiBundle/Features/Gestione.feature      |   47 ++++++++++++++++++++
    .../Resources/views/Default/index.html.twig        |   25 ++++++++++-
    .../UserBundle/DataFixtures/ORM/LoadUserData.php   |    3 +-
    .../UserBundle/Resources/doc/index.rst             |   45 ++++++++++++++++++-
    8 files changed, 161 insertions(+), 13 deletions(-)
    create mode 100644 app/config/config_behat.yml
    create mode 100644 src/Accreditamenti/CongressiBundle/Features/Context/FeatureContext.php
    create mode 100644 src/Accreditamenti/CongressiBundle/Features/Gestione.feature

A questo punto siamo allineati con il **master** e possiamo fare le nostre 
modifiche al progetto. Finito di lavorare aggiugiamo i file modificati lanciando 

::

    $ git add .

Poi facciamo commit.

::

    $ git commit -m 'mio commento'

Prima di buttare tutto su github, è buona norma rilanciare la **pull** per 
caricare eventuali commit fatti da altri collaboratori.

::

    $ git pull origin master 

Successivamente, possiamo lanciare la push per caricare online i nostri commit

::

    $ git push origin master

Ricapitolando:
--------------

::

    $ cd /var/www/accreditamenti
    $ git pull origin master
    ....
    $ git add .
    $ git commit -m 'messaggio'
    ....
    $ git add .
    $ git commit -m 'messaggio'
    ....
    $ git add .
    $ git commit -m 'messaggio'
    ....
    $ git add .
    $ git commit -m 'messaggio'
    $ git pull origin master
    $ git push origin master

Inizializzare behat per testare un bundle
=========================================

Per inizializzare un Bundle in modo tale che possa funzionare con Behat, bisogna
bisogna lanciare il seguente comando:

::

    $ php app/console --env=test behat --init @AccreditamentiUserBundle

Dopo di chè, per lanciare behat:

::

    $ php app/console --env=test behat @AccreditamentiUserBundle

o in alternativa

::

    $ ./app/console --env=test behat @AccreditamentiUserBundle

Caricare i dati di default nel database
=======================================

E' possibile caricare dei record di default nel database. Questi prendono il nome
di fixtures. Ci sono anche in Yii. In pratica con il comando

::

    $ php app/console doctrine:fixtures:load

Vengono ricercare le fixtures di tutti i bundle. Nel nostro caso le fixtures creano
l'utente admin:

::

    Accreditamenti\UserBundle\DataFixtures\ORM\LoadUserData::load(ObjectManager $manager);

ovvero:

::

    $userAdmin = new User();
    $userAdmin->setUsername('admin');
    $userAdmin->setPlainPassword('admin');
    $userAdmin->setEmail('giuseppe.rubino@gmail.com');
    $manager->persist($userAdmin);
    $manager->flush();

User roles
==========

E' possibile promuovere un utente ad un determinato ruolo con il comando:

::

    $ php app/console fos:user:promote

Ci verrà chiesto il nome dell'utente da promuovere ed il nome del ruolo al quale
deve essere promosso.

Twig e FOSUserBundle
====================

Per integrare il FOSUser alla nostra applicazione dobbiamo modificare il
template del FOSUser. Per prima cosa, dibbiamo ricordarci di dire al nostro
UserBundle che il suo "padre" è FOSUserBundle.

::

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

::

    src/Accreditamenti/Resoureces/views/layout.html.twig

ed al suo interno immettere questo codice:

::

    {% extends '::base.html.twig' %}
    {% block body %}
        {{ block('fos_user_content') }}
    {% endblock %}