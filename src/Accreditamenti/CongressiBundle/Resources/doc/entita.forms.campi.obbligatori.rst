Campo non obbligatorio
======================

Rendere nullabile il campo di un'entità
---------------------------------------

::

     /**
     * @var string $email_referente
     *
     * @ORM\Column(name="email_referente", nullable=true, type="string", length=255)
     */
    private $email_referente;


Salvare la migration
--------------------

Vedo prima qual'è la differenza tra il db e l'entità

::

    php app/console doctrine:migrations:diff

symfony mi genera un nuovo file migration

::

    Generated new migration class to "/var/www/accreditamenti/app/DoctrineMigrations/Version20120603173835.php" from schema differences.


dopo lancio

::

    php app/console doctrine:migrations:migrate


symfony mi avvisa che l'alter è avvenuto con successo

::  
    
    Application Migrations                    


    WARNING! You are about to execute a database migration that could result in schema changes and data lost. Are you sure you wish to continue? (y/n)y
    Migrating up to 20120603173835 from 20120603173726

    ++ migrating 20120603173835

    -> ALTER TABLE ideacpa_congresso CHANGE email_referente email_referente VARCHAR(255) DEFAULT NULL

    ++ migrated (0.88s)

    ------------------------

    ++ finished in 0.88
    ++ 1 migrations executed
    ++ 1 sql queries


Rendere non obbligatorio il campo nel form
------------------------------------------

::

    ->add('email_referente', 'text', array(
                'required' => false
            ))



Upload di un file
-----------------
Per prima cosa ho trasformato il campo del form da input text a input file
in   namespace Accreditamenti\CongressiBundle\Form;
nel file CongressoType.php

::

    //->add('manifesto')
    ->add('manifesto', 'file')

dopo vado nel controller interessato ed aggiungo questo codice subito dopo il flush:

::
    
    // Upload del manifesto del congresso
    $dir = $_SERVER['DOCUMENT_ROOT'] . "/uploads";

    $extension = $editForm['manifesto']->getData()->guessExtension();
    if (!$extension) {
        // l'estensione non può essere indovinata
        $extension = 'bin';
    }

    $ma= rand(1, 99999) . '.' . $extension;
    $editForm['manifesto']->getData()->move($dir,$ma);
            



