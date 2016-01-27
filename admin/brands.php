<?php require_once('../core/init.php'); ?>
<?php require_once('includes/head.php'); ?>
<?php require_once('includes/navigation.php'); ?>
<?php // Get brands from database
$sql = "SELECT * FROM brand ORDER BY brand";
$results = mysqli_query($db, $sql);
$errors = array();
// If add form is submitted

if(isset($_POST['add_submit'])) {

}

 ?>
<h2 class="text-center">Brands</h2>
<!-- Brand Form -->

<div>
	<div class="text-center">
		<form class="form-inline" action="brands.php" method="post">
			<div class="form-group">
				<label for="brand">Add A Brand</label>
				<input type="text" name="brand" id="brand" class="form-control" value="<?php if(isset($_POST['brand'])) { echo $_POST['brand']; } ?>">
				<input type="submit" name="add_submit" value="Add Brand" class="btn btn-md btn-success">
			</div>
		</form><hr>
	</div>
</div>


<table class="table table-bordered table-striped table-auto">
	<head>
		<th></th><th>Brand</th><th></th>
	</head>
	<tbody>
		<?php while($row = mysqli_fetch_assoc($results)) : ?>
		<tr>
			<td><a href="brands.php?edit=<?php echo $row['id']; ?>" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-pencil"></span></a></td>
			<td><?php echo $row['brand']; ?></td>
			<td><a href="brands.php?delete=<?php echo $row['id']; ?>" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-remove"></span></a></td>
		</tr>
		<?php endwhile; ?>
	</tbody>
</table>
<?php require_once('includes/footer.php'); ?>