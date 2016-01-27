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
				<th>Category</th><th>Level</th><th></th>
			</head>
			<tbody>
				<?php while($parent = mysqli_fetch_assoc($result)) : 
					$parent_id = (int)$parent['id'];
					$sql2 = "SELECT * FROM categories WHERE parent_id = '$parent_id'";
					$cresult = mysqli_query($db, $sql2);
				?>
				<tr class="bg-primary">
					<td><?php echo $parent['category']; ?></td>
					<td>Parent</td>
					<td>
						<a href="categories.php?edit=<?php echo $parent['id']; ?>" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-pencil"></span></a>
						<a href="categories.php?delete=<?php echo $parent['id']; ?>" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-remove"></span></a>
					</td>
				</tr>
				<?php while($child = mysqli_fetch_assoc($cresult)) : ?>
					<tr class="bg-secondary">
					<td><?php echo $child['category']; ?></td>
					<td>Child</td>
					<td>
						<a href="categories.php?edit=<?php echo $child['id']; ?>" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-pencil"></span></a>
						<a href="categories.php?delete=<?php echo $child['id']; ?>" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-remove"></span></a>
					</td>
				</tr>
				<?php endwhile; ?>
				<?php endwhile; ?>
			</tbody>
		</table>
	</div>
</div>

<?php 
include('includes/footer.php');
?>