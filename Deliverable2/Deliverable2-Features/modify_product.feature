Feature: modify product
	In order to modify a product's information
	As a user
	I need to select a product to modify

Scenario:
	Given I am logged into my account
	And I click on the seller's profile
	And I click on a product
	And I edit the name
	And I edit the quantity
	And I click 'Update'
	Then I see the update product available for purchase