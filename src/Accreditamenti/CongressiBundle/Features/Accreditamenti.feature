Feature: Gestione degli accreditamenti

Scenario: Voglio vedere il titolo del congresso associato ad un accreditamento
    Given I go to "/"
    And I follow "Login"
    When I fill in "_username" with "giuseppe"
    And I fill in "_password" with "giuseppe"
    Given I press "Login"
    When I am on "/congresso/new"
    And I fill in "Codice congresso" with "TEST89"
    And I fill in "Url" with "http://www.google.com"
    And I fill in "Titolo" with "Questo è il titolo dell'accreditamento"
    And I fill in "Descrizione" with "mia descrizione"
    And I fill in "accreditamenti_congressibundle_congressotype_data_inizio_date_day" with "01"
    And I fill in "accreditamenti_congressibundle_congressotype_data_inizio_date_month" with "01"
    And I fill in "accreditamenti_congressibundle_congressotype_data_inizio_date_year" with "2012"
    And I fill in "accreditamenti_congressibundle_congressotype_data_fine_date_day" with "01"
    And I fill in "accreditamenti_congressibundle_congressotype_data_fine_date_month" with "01"
    And I fill in "accreditamenti_congressibundle_congressotype_data_fine_date_year" with "2012"
    And I fill in "Luogo" with "Roma"
    And I fill in "accreditamenti_congressibundle_congressotype_manifesto" with "/manifeso.jpg"
    And I fill in "accreditamenti_congressibundle_congressotype_path_pdf_programma" with "/home/programma.pdf"
    And I fill in "accreditamenti_congressibundle_congressotype_path_pdf_iscrizione" with "/home/iscrizione.pdf"
    And I fill in "accreditamenti_congressibundle_congressotype_path_pdf_prenotazione" with "/home/prenotazione.pdf"
    And I fill in "Email referente" with "giuseppe.rubino@gmail.com"
    And I check "Ricezione abstract"
    And I check "Pagina sponsor"
    And I check "Abilitato"
    Given I press "Create"
    When I follow "link_accreditamento_new"
    And I fill in "accreditamenti_congressibundle_accreditamentotype_numero_accreditamento" with "33"
    And I fill in "accreditamenti_congressibundle_accreditamentotype_titolo" with "Titolo"
    And I fill in "accreditamenti_congressibundle_accreditamentotype_luogo" with "Cesena"
    And I fill in "accreditamenti_congressibundle_accreditamentotype_data_inizio_day" with "01"
    And I fill in "accreditamenti_congressibundle_accreditamentotype_data_inizio_month" with "01"
    And I fill in "accreditamenti_congressibundle_accreditamentotype_data_inizio_year" with "2012"
    And I fill in "accreditamenti_congressibundle_accreditamentotype_data_fine_day" with "01"
    And I fill in "accreditamenti_congressibundle_accreditamentotype_data_fine_month" with "01"
    And I fill in "accreditamenti_congressibundle_accreditamentotype_data_fine_year" with "2012"
    And I fill in "accreditamenti_congressibundle_accreditamentotype_ore_formative" with "2012"
    And I fill in "accreditamenti_congressibundle_accreditamentotype_obiettivo_formativo" with "Descrizione dell'obiettivo ..."
    And I fill in "accreditamenti_congressibundle_accreditamentotype_numero_crediti" with "2012"
    And I fill in "accreditamenti_congressibundle_accreditamentotype_supporto_aziende_sponsor" with "Mellin, Plasmon"
    Given I press "Create"
    Then the response should contain "Accreditamento creato con successo"
    Then the response should contain "Questo è il titolo dell&#039;accreditamento"