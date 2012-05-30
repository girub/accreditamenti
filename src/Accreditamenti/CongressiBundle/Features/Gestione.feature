Feature: Come Admin voglio gestire i congressi

Scenario: As Guest I want to login
    Given I go to "/"
    Then the response should not contain "crea congresso"
    And I follow "login"
    When I fill in "_username" with "giuseppe"
    And I fill in "_password" with "giuseppe"
    Given I press "Login"
    Then the response should contain "logout (giuseppe)"
    And the response should contain "giuseppe@giuseppe.com"
    Given I go to "/"
    Then the response should contain "Puoi creare un congresso."