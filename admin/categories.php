<?php
require_once($_SERVER['DOCUMENT_ROOT']) . '/boutique/core/init.php';
include('includes/head.php');
include('includes/navigation.php');
?>

<?php 
// change
$sql = "SELECT * FROM categories WHERE parent_id = 0";
$result = mysqli_query($db, $sql);

// Delete category 
if(isset($_GET['delete']) && !empty($_GET['delete'])) {
	$delete_id = (int)($_GET['delete']);
	$delete_id = sanitize($delete_id);
	$dsql = "DELETE FROM categories WHERE id = '$delete_id'";
	$result = mysqli_query($db, $dsql);
	$category = mysqli_fetch_assoc($result);
	if($category['parent_id'] == 0) {
		$csql = "DELETE FROM categories WHERE parent_id = '$delete_id'";
		mysqli_query($csql);
		header('Locatoin: categories.php');
	}
	header("Location: categories.php");
} 


// Process form
$errors = array();
if(isset($_POST) && !empty($_POST)) {
	$parent = sanitize($_POST['parent']);
	$category = sanitize($_POST['category']);
	$sqlform = "SELECT * FROM categories WHERE category = '$category' AND parent_id = '$parent'";
	$fresult = mysqli_query($db, $sqlform);
	$count = mysqli_num_rows($fresult);

	// If category is blank
	if($category == '') {
		$errors[] = 'The category cannot be left blank';
	}
	if($count > 0) {
		$errors[] = $category . ' already exists, please choose a new category';
	}

	// Display errors or update database

	if(!empty($errors)) {
		$display = display_errors($errors); 

	} else {
		$updatesql = "INSERT INTO categories (category, parent_id) VALUES ('$category', '$parent')";
		mysqli_query($db, $updatesql);
		header("Location: categories.php");
	}
}

?>

<h2 class="text-center">Categories</h2>

<div class="row">

	<!-- Form -->
	<div class="col-md-6">
		<form class="form" action="categories.php" method="post">
			<legend>Add A Category</legend>
			<div id="errors"><?php echo display_errors($errors); ?></div>
			<div class="form-group">
				<label for="parent">Parent</label>
				<select class="form-control" name="parent" id="parent">
					<option value="0">None</option>
					<?php while($parent = mysqli_fetch_assoc($result)) : ?>
						<option value="<?php echo $parent['id'] ?>"><?php echo $parent['category']; ?></option>
					<?php endwhile; ?>
				</select>
			</div>
			<div class="form-group">
				<label for="category">Category</label>
				<input type="text" class="form-control" id="category" name="category">
			</div>
			<div class="form-group">
				<input type="submit" class="btn btn-success" value="Add Category">
			</div>
		</form>
	</div>

	<!-- Category Table -->
	<div class="col-md-6">
		<table class="table table-border">
			<head>
				<th>Category</th><th></th><th></th>
			</head>
			<tbody>
				<?php 
					$sql = "SELECT * FROM categories WHERE parent_id = 0";
					$result = mysqli_query($db, $sql);	
					while($parent = mysqli_fetch_assoc($result)) : 
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
					<tr class="bg-info">
					<td><?php echo $child['category']; ?></td>
					<td><?php echo $parent['category']; ?></td>
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