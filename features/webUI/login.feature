Feature: Google search
  As a user
  I want to use owncloud
  So that I can manage my files

  Scenario: admin login
    Given the user has visited to login page
    When the user logs in with user "admin" and password "admin"
    Then the files page should be displayed