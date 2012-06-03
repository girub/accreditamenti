Feature: Come Admin voglio gestire i congressi

Scenario: As Guest I want to login
    Given I go to "/"
    Then the response should not contain "crea congresso"
    Then the response should not contain "link-crea-nuovo-congresso"
    And I follow "login"
    When I fill in "_username" with "giuseppe"
    And I fill in "_password" with "giuseppe"
    Given I press "Login"
    Then the response should contain "logout (giuseppe)"
    And the response should contain "giuseppe@giuseppe.com"
    Given I go to "/"
    Then the response should contain "Puoi creare un congresso."
    Then the response should contain "link-crea-nuovo-congresso"

Scenario: As User Create a new Congress
    When I am on "/congresso/new"
    When I fill in "_codice_congresso" with "TEST89"
    When I fill in "_url" with "http://www.google.com"
    When I fill in "_titolo" with "titolo test"
    When I fill in "_descrizione" with "mia descrizione"
    When I fill in "_data_inizio" with "2012-09-01 00:00:00"
    When I fill in "_data_fine" with "2012-09-03 00:00:00"
    When I fill in "_luogo" with "Roma"
    When I fill in "_manifesto" with "/manifeso.jpg"
    When I fill in "_path_pdf_programma" with "/home/programma.pdf"
    When I fill in "_path_pdf_iscrizione" with "/home/iscrizione.pdf"
    When I fill in "_path_pdf_prenotazione" with "/home/prenotazione.pdf"
    When I fill in "_email_referente" with "giuseppe.rubino@gmail.com"
    When I fill in "_ricezione_abstract" with "true"
    When I fill in "_pagina_sponsor" with "false"
    When I fill in "_abilitato" with "true"
    Given I press "create"
    Then the response should contain "Congresso creato con successo"


Scenario: As User I can Delete a Congress
    When I am on "/congresso/mostra/10"
    Given I press "Delete"
    Then the response should contain "Congresso eliminato con successo"


Scenario: As User I can Edit a Congress
    When I am on "/congresso/mostra/10"
    Given I press "Delete"
    Then the response should contain "Congresso aggiornato con successo"