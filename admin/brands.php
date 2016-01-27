<?php require_once('../core/init.php'); ?>
<?php require_once('includes/head.php'); ?>
<?php require_once('includes/navigation.php'); ?>
<?php // Get brands from database
$sql = "SELECT * FROM brand ORDER BY brand";
$results = mysqli_query($db, $sql);

 ?>
<h2 class="text-center">Brands</h2>
<table class="table table-bordered table-striped table-auto">
	<head>
		<th></th><th>Brand</th><th></th>
	</head>
	<tbody>
		<tr>
		<?php while($row = mysqli_fetch_assoc($results)) : ?>
			<td><a href="brands.php?edit=<?php echo $row['id']; ?>" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-pencil"></span></a></td>
			<td>Levis</td>
			<td><a href="brands.php?delete=<?php echo $row['id']; ?>" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-remove"></span></a></td>
		<?php endwhile; ?>
		</tr>
	</tbody>
</table>
<?php require_once('includes/footer.php'); ?>