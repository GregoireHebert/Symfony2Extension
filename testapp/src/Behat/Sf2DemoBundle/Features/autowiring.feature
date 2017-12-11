@autowiring
Feature: Autowiring
  In order to access Symfony services in contexts
  As a features tester
  I don't need to declare them in my Behat configuration

  Scenario: Inject Symfony services in contexts constructor
    Given I have a fooService instance
    When I call a public method from it
    Then I should have a valid result
