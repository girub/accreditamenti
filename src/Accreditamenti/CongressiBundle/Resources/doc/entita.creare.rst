========================
Creare una nuova entita
========================

--------
Premessa
--------

In Symfony2, per creare il databse, non si passa da MySQL o da un altro DBMS. In
Symfony2, si creano e modificano le entità. Le entità fanno parte del Model.

=========================
Elenco delle cose da fare
=========================

#. Generare una nuova entità da console
#. Creare la migration per il database

------------------------------------
Generare una nuova entità da console
------------------------------------

::

    php app/console generate:doctrine:entity

output:

::

    Welcome to the Doctrine2 entity generator  



    This command helps you generate Doctrine2 entities.

    First, you need to give the entity name you want to generate.
    You must use the shortcut notation like AcmeBlogBundle:Post.

    The Entity shortcut name: AccreditamentiCongressiBundle:Accreditamento

    Determine the format to use for the mapping information.

    Configuration format (yml, xml, php, or annotation) [annotation]: 

    Instead of starting with a blank entity, you can add some fields now.
    Note that the primary key will be added automatically (named id).

    Available types: array, object, boolean, integer, smallint, 
    bigint, string, text, datetime, datetimetz, date, time, decimal, float.

    New field name (press <return> to stop adding fields): titolo
    Field type [string]: 
    Field length [255]: 

    New field name (press <return> to stop adding fields): luogo
    Field type [string]: 
    Field length [255]: 

    New field name (press <return> to stop adding fields): data_inizio
    Field type [string]: date

    New field name (press <return> to stop adding fields): data_fine
    Field type [string]: date

    New field name (press <return> to stop adding fields): ore_formative
    Field type [string]: floa          
    Field length [255]: 

    New field name (press <return> to stop adding fields): obiettivo_formativo
    Field type [string]: text

    New field name (press <return> to stop adding fields): numero_crediti
    Field type [string]: float

    New field name (press <return> to stop adding fields): numero_accreditamento
    Field type [string]: float

    New field name (press <return> to stop adding fields): 

    Do you want to generate an empty repository class [no]? yes


    Summary before generation  


    You are going to generate a "AccreditamentiCongressiBundle:Accreditamento" Doctrine2 entity
    using the "annotation" format.

    Do you confirm generation [yes]? 


    Entity generation  


    Generating the entity code: OK


    You can now start using the generated code!

-----------------------------------
Creare la migration per il database
-----------------------------------

Prima di creare la tabella con la migration è possibile, eventualmente, 
modificare il codige generato da Symfony2. Per esempio è possibile modificare
l'ordine degli attributi o dei metodi.


:: 

    php app/console doctrine:migrations:diff

    giuseppe@giuseppe-notebook:/var/www/accreditamenti$ php app/console doctrine:migrations:diff
    Generated new migration class to "/var/www/accreditamenti/app/DoctrineMigrations/Version20120608212739.php" from schema differences.

e quindi ...

::  
        php app/console doctrine:migrations:migrate

che mi genera la mia tabella e dajjjeeeeeeee il gioco è fatto!!!