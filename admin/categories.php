<?php
require_once($_SERVER['DOCUMENT_ROOT']) . '/boutique/core/init.php';
include('includes/head.php');
include('includes/navigation.php');
?>

<?php 
$sql = "SELECT * FROM categories WHERE parent_id = 0";
$result = mysqli_query($db, $sql);

?>

<h2 class="text-center">Categories</h2>

<div class="row">
	<div class="col-md-6"></div>
	<div class="col-md-6">
		<table class="table table-border">
			<head>
				<th>Category</th><th>Parent</th><th></th>
			</head>
			<tbody>
				<?php while($parent = mysqli_fetch_assoc($result)) : ?>
				<tr class="bg-primary">
					<td><?php echo $parent['category']; ?></td>
					<td>
						<a href="categories.php?edit=<?php echo $parent['id']; ?>" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-pencil"></span></a>
						<a href="categories.php?delete=<?php echo $parent['id']; ?>" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-remove"></span></a>
					</td>
				</tr>
				<?php endwhile; ?>
			</tbody>
		</table>
	</div>
</div>

<?php 
include('includes/footer.php');
?>