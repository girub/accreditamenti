Feature: Come utente Anonimo entro dentro la pagina mostraTutti e voglio cliccare su un congresso per vedere il dettaglio

Scenario: As User Create a new Test
    Given I go to "/congresso/mostraTutti"
    #Then show last response 
    Then the response should not contain "show"
    #Then show last response
    #When I am on "/congresso/mostraTutti"
    #Then the response should not contain "edit"
    #Then the response should not contain "Create a new entry"
 
    #And I follow "dettaglio"
  