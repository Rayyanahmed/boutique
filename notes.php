<?php 

// Created a table with id, title, price, list_price, brand, categories (will have multiple), image (one image), description
// For my next project I will implement multiple images

// Added brand table: field - brand, varchar 255. 

// Added another table: category. fields: category, parent. category field will be the name, parent will be incase this 
// category is nested inside another one. parent will have a default of 0, assumption is each category will be a top level
// category


// Added Men, Women, Girls, Boys in our categories table. These will be our top level menu items
// changed parent column in the category table to parent_id, this will correlate to the ID of your parent category

?>