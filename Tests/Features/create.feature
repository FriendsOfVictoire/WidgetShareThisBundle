@mink:selenium2 @alice(Page)  @reset-schema
Feature: Create a Sharing toolbar widget

    Background:
        Given I maximize the window
        And I am on homepage

    Scenario: I create a new ShareThis widget
        When I switch to "layout" mode
        Then I should see "New content"
        When I select "Sharing toolbar" from the "1" select of "main_content" slot
        Then I should see "Widget (Sharing toolbar)"
        And I should see "1" quantum