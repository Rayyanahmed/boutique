<?php 

$sql = "SELECT * FROM categories WHERE parent = 0";
// This takes the database object which has already been included at top of index.php and 
// we will call the query method on it with a parameter of the $sql statement
// Now parent query is an object
$parent_query = $db->query($sql);

?>

<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<a href="index.php" class="navbar-brand">Shaunta's Boutique</a>
			<ul class="nav navbar-nav">
				<?php while($parent = $parent_query->mysqli_fetch_assoc()) : ?>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Men<span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="#">Shirts</a></li>
						<li><a href="#">Pants</a></li>
						<li><a href="#">Shoes</a></li>
						<li><a href="#">Accessories</a></li>
					</ul>
				</li>
				?>
			</ul>
		</div>
	</nav>