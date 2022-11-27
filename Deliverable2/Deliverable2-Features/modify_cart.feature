Feature: modify cart
	In order to modify a product from the cart
	As a user
	I need to select a product in my cart

Scenario:
	Given I am logged into my account
	And I click on the 'Cart'
	And I click 'Modify'
	And I click on the 'Cart'
	Then I see the modified product in the cart