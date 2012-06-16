Feature: Messaggio di benvenuto

Scenario: As Guest I want to see a wellcome message
    Given I go to "/"
    Then the response should contain "Wellcome to Accreditamenti!"