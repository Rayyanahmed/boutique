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
					<a href="" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-pencil"></span></a>
					<a href="" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-remove"></span></a>
				</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
		<?php endwhile; ?>
	</tbody>
</table>


<?php
include('includes/footer.php');
?>