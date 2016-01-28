<?php 
require_once($_SERVER['DOCUMENT_ROOT'] . '/boutique/core/init.php');
include('includes/head.php');
include('includes/navigation.php');
// This is to archive our deleted products
$sql = "SELECT * FROM products WHERE deleted = 0";
$presults = mysqli_query($db, $sql);
?>

<h2 class="text-center">Products</h2><hr>
<table class="table table-border table-condensed table-striped">
	<thead><th></th><th>Product</th><th>Price</th><th>Categories</th><th>Featured</th><th>Sold</th></thead>
	<tbody>
		<?php while($product = mysqli_fetch_assoc($presults)): ?>
			<tr>
				<td>
					<a href="?edit=<?php echo $product['id']; ?>" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-pencil"></span></a>
					<a href="?delete=<?php echo $product['id']; ?>" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-remove"></span></a>
				</td>
				<td><?php echo $product['title']; ?></td>
				<td><?php echo money($product['price']); ?></td>
				<td><?php echo $product['categories']; ?></td>
				<td><a class="btn btn-xs btn-default" href="products.php?featured=<?php echo (($product['featured'] == 0)?'1':'0') ?>&id=<?php echo $product['id']; ?>"><span class="glyphicon glyphicon-<?php echo (($product['featured'] == 1)?'minus':'plus') ?>"></span>
				</a>&nbsp <?php echo (($product['featured'] == 1)?'Featured Product':'') ?></td>
				<td><?php echo $product['title']; ?></td>
			</tr>
		<?php endwhile; ?>
	</tbody>
</table>


<?php
include('includes/footer.php');
?>