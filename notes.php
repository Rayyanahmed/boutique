<?php 

// Created a table with id, title, price, list_price, brand, categories (will have multiple), image (one image), description
// For my next project I will implement multiple images

// Added brand table: field - brand, varchar 255. 

// Added another table: category. fields: category, parent. category field will be the name, parent will be incase this 
// category is nested inside another one. parent will have a default of 0, assumption is each category will be a top level
// category


// Added Men, Women, Girls, Boys in our categories table. These will be our top level menu items
// changed parent column in the category table to parent_id, this will correlate to the ID of your parent category

// Added a bunch of sub categories with corresponding parent_id's

// Added a brands item "Levis"


// Added some forgotten columns to our products table. Added a sizes column and added a features column which 
// will be a boolean. If the product is featured it will show up on our homepage, otherwise it will not

// Most products will be under sub categories. Take Levi's jeans for example. We know that this is a mens product
// which is a top level category. We also know that it is going to be under the pants subcategory
// So lets look for pants where the parent_id is related to mens primary key.
// So levis category_id will be whatever pants under mens primary key is

// Forgot to click out of the database, so when I set Levi's (my only seeded product so far) column featured = 1 it did not
// save, therefore nothing was showing, I clicked out, featured got set to 1 and now it displays properly

// Notes, figure out how to save absolute vs relative paths for image sources in the database
?>
