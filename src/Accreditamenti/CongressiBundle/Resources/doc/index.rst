Creare un test per un nuovo congresso
-------------------------------------

Scrivo il mio scenario dentro Gestione.feture:

::

    Scenario: As User Create a new Congress
        When I am on "/congresso/new"
        When I fill in "Codice congresso" with "TEST89"
        When I fill in "Url" with "http://www.google.com"
        When I fill in "Titolo" with "titolo test"
        When I fill in "Descrizione" with "mia descrizione"
        # Then show last response
        When I fill in "accreditamenti_congressibundle_congressotype_data_inizio_date_year" with "2012"
        When I fill in "accreditamenti_congressibundle_congressotype_data_inizio_date_month" with "09"
        When I fill in "accreditamenti_congressibundle_congressotype_data_inizio_date_day" with "01"
        When I fill in "accreditamenti_congressibundle_congressotype_data_fine_date_year" with "2012"
        When I fill in "accreditamenti_congressibundle_congressotype_data_fine_date_month" with "09"
        When I fill in "accreditamenti_congressibundle_congressotype_data_fine_date_day" with "01"
        When I fill in "Luogo" with "Roma"
        When I fill in "Manifesto" with "/manifeso.jpg"
        When I fill in "Path pdf programma" with "/home/programma.pdf"
        When I fill in "Path pdf iscrizione" with "/home/iscrizione.pdf"
        When I fill in "Path pdf prenotazione" with "/home/prenotazione.pdf"
        When I fill in "Email referente" with "giuseppe.rubino@gmail.com"
        When I fill in "Ricezione abstract" with "true"
        When I fill in "Pagina sponsor" with "false"
        When I fill in "Abilitato" with "true"
        Given I press "Create"
        Then the response should contain "Congresso creato con successo"

Ricordiamo che posso inserire o label o id del campo 

lancio 

::

    php app/console --env=test behat @AccreditamentiCongressiBundle --format=progress

Le defiunizioni di behat
------------------------

Con questo comando possiamo vedere tutte le frasi che possiamo usare dentro behat:

::

    $ php app/console --env=test behat @AccreditamentiCongressiBundle -dl | grep check

... elenco delle frasi con check ...

::

    When /^(?:|I )check "(?P<option>(?:[^"]|\\")*)"$/
    When /^(?:|I )uncheck "(?P<option>(?:[^"]|\\")*)"$/
    Then /^the "(?P<checkbox>(?:[^"]|\\")*)" checkbox should be checked$/
    Then /^the "(?P<checkbox>(?:[^"]|\\")*)" checkbox should not be checked$/



Utilizzare le flash message
---------------------------

In createAction() dopo avere salvato i dati imposto il mio messaggio che voglio vedere

:: 

             // Salvo i dati nel db
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            // Imposto il flash message
            $this->get('session')->setFlash('notice', 'Congresso creato con successo');

a questo punto mi bastera andare nel template twig e mettere questo codice 
dove vogliamo visualizzare il messaggio

:: 

        {% if app.session.hasFlash('notice') %}
            <div class="flash-notice">
                {{ app.session.flash('notice') }}
            </div>
        {% endif %}


PS.
Ricordiamo che è meglio inserire il codice dentro il template base 
in questo tutti i template si estendo da quello.

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