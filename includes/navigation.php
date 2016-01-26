<?php 

$sql = "SELECT * FROM categories WHERE parent_id = 0";

$parent_query = mysqli_query($db, $sql);

print_r($parent_query);

?>

<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<a href="index.php" class="navbar-brand">Shaunta's Boutique</a>
			<ul class="nav navbar-nav">
				<?php while($row = mysqli_fetch_assoc($parent_query)) : ?>
				<?php $parent_id = $row['parent_id']; ?>
				<?php echo $parent_id; ?>
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