Feature: Login

  Scenario: Scenario with bad login values provided
    Given I am on "/login"
    When I fill in "login[username]" with "pwet"
    And I fill in "login[password]" with "lolilol"
    And I press "login[submit]"
    Then I should see "bad login/password provided"

  Scenario: Scenario with correct login values provided
    Given I am on "/login"
    When I fill in "login[username]" with "guiguiboy"
    And I fill in "login[password]" with "plop"
    And I press "login[submit]"
    Then I should see "Welcome, guiguiboy"

