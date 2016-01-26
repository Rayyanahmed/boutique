<?php 

$sql = "SELECT * FROM categories WHERE parent = 0";
// This takes the database object which has already been included at top of index.php and 
// we will call the query method on it with a parameter of the $sql statement
// Now parent query is an object
// Find out the difference between this way and mysqli_query() function
// For the while loop, I assume I will find the parent_id, assign it to a variable
// if the parent_id is equal to 0 that means it is a top level menu item
// otherwise it is a child menu item so it will be inserted in the dropdown
$parent_query = $db->query($sql);

?>

<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<a href="index.php" class="navbar-brand">Shaunta's Boutique</a>
			<ul class="nav navbar-nav">
				<?php while($parent = mysqli_fetch_assoc($parent_query)) : ?>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Men<span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="#">Shirts</a></li>
						<li><a href="#">Pants</a></li>
						<li><a href="#">Shoes</a></li>
						<li><a href="#">Accessories</a></li>
					</ul>
				</li>
				<?php endwhile; ?>
			</ul>
		</div>
	</nav>