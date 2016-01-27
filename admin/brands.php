<?php require_once('../core/init.php'); ?>
<?php require_once('includes/head.php'); ?>
<?php require_once('includes/navigation.php'); ?>
<?php // Get brands from database
$sql = "SELECT * FROM brand ORDER BY brand";
$results = mysqli_query($db, $sql);
$errors = array();

// Edit Brand
if(isset($_GET['edit']) && !empty($_GET['edit'])) {
	$edit_id = (int)$_GET['edit'];
	$edit_id = sanitize($edit_id);
	$sql2 = "SELECT * FROM brand WHERE id = '$edit_id'";
	$edit_result = mysqli_query($db, $sql2);
	$eBrand = mysqli_fetch_assoc($edit_result);
	

}

// Delete brand
if(isset($_GET['delete']) && !empty($_GET['delete'])) {
	$delete_id = (int)($_GET['delete']);
	$delete_id = sanitize($delete_id);
	// should write an sql query to see if the brand exists first in order to delete
	$sql = "DELETE FROM brand WHERE id = '$delete_id'";
	mysqli_query($db, $sql);
	header('Location: brands.php');

}

// If add form is submitted

if(isset($_POST['add_submit'])) {
	// check if brand is blank
	if(empty($_POST['brand'])) {
		$errors[] = 'You must enter a brand';
	}
	// Check if brand exists in database
	$brand = sanitize($_POST['brand']);
	$sql = "SELECT * FROM brand WHERE brand = '$brand'";
	$result = mysqli_query($db, $sql);
	$count = mysqli_num_rows($result);
	if($count > 0) {
		$errors[] = $brand . ' already exists!';
	}
	// display errors
	if(!empty($errors)) {
		echo display_errors($errors);
	} else {
		// Add brand to database
		$sql = "INSERT INTO brand (brand) VALUES ('$brand')";
		mysqli_query($db, $sql);
		header('Location: brands.php');
	}
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


<table class="table table-bordered table-striped table-auto table-condensed">
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