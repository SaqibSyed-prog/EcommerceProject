Feature: register
    In order to register an account on the website
    As a user
    I need to provide a username, email, password, and contact information in a form to create an account

 Scenario: Register an account
    Given I am on the login page
    When I click "Register"
    Then I am redirected to the registration form page to register my account