Feature: add to wishlist
	In order to add a product to the wishlist
	As a user
	I need to select a product to add to my wishlist

Scenario:
	Given I am logged into my account
	And I click on the product
	And I click 'Add to Wishlist'
	And I click on the wishlist a want
	Then I see the product in the wishlist