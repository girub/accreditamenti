Creare un test con behat
========================

Premessa
--------

Lo scopo del test non è creare un nuovo congresso, quanto assicurarsi che a
farlo sia un utente registrato e non un utente anonimo.

Per scrivere un test abbiamo bisogno di un file .feature. Siccome dobbiamo
testare la gestione del CRUD, la nostra feauture sarà Gestione.feture. Questo
file si troverà dentro al file:

::

    src/Accreditamenti/CongressiBundle/Features/Gestione.feature

Per valorizzare un campo di testo, nel test posso indicare sia la sua label, che
il suo id. Ecco il contenuto del nostro test:

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

Per lanciare un test con behat posso usare questo comando:

::

    $ php app/console --env=test behat @AccreditamentiCongressiBundle

Questa modalità, però, è molto verbosa, e può essere preferibile aggiungere il 
parametro --format=progress che compatterà i test. In particolare, al posto
delle singole frasi, si vedranno dei puntini verdi.

::

    $ php app/console --env=test behat @AccreditamentiCongressiBundle --format=progress

Le definizioni di behat
-----------------------

Con questo comando possiamo vedere tutte le frasi che possiamo usare con behat:

::

    $ php app/console --env=test behat @AccreditamentiCongressiBundle -dl

Se cerchiamo qualche cosa di particolare, possiamo sfruttare il comando grep
della bash. Per esempio, cerchiamo l'elenco delle frasi con check:

::

    $ php app/console --env=test behat @AccreditamentiCongressiBundle -dl | grep check

Ecco l'output:

::

    When /^(?:|I )check "(?P<option>(?:[^"]|\\")*)"$/
    When /^(?:|I )uncheck "(?P<option>(?:[^"]|\\")*)"$/
    Then /^the "(?P<checkbox>(?:[^"]|\\")*)" checkbox should be checked$/
    Then /^the "(?P<checkbox>(?:[^"]|\\")*)" checkbox should not be checked$/

Lanciare un singolo Scenario
----------------------------

::

    $ php app/console --env=test behat @AccreditamentiCongressiBundle/Gestione.feature:65