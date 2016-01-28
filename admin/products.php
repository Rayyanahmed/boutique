<?php 
require_once($_SERVER['DOCUMENT_ROOT'] . '/boutique/core/init.php');
include('includes/head.php');
include('includes/navigation.php');
$brandQuery = mysqli_query($db, "SELECT * FROM brand");

if (isset($_GET['add'])) {

?>
	<h2 class="text-center">Add A New Product</h2><tr>
	<form action="products.php?add=1" method="POST" entype="multipart/form-data">
		<div class="form-group col-md-3">
			<label for="title">Title*</label>
			<input type="text" name="title" id="title" value="<?php echo((isset($_POST['title']))?sanitize($_POST['title']) :'') ?>">
		</div>
		<div class="form-group col-md-3">
			<label for="brand">Brand*</label>
			<select class="form-control" id="brand" name="brand">
				<option value=""></option>
				<?php while($brand = mysqli_fetch_assoc($brandQuery)): ?>
					<option value="<?php echo $brand['id']; ?>"><?php echo $brand['brand']; ?></option>
				<?php endwhile; ?>
			</select>
		</div>
	</form>
<?php } else {



// This is to archive our deleted products
$sql = "SELECT * FROM products WHERE deleted = 0";
$presults = mysqli_query($db, $sql);
// We are now going to write logic that will update whether the product is featured or not
// Kind of like an on off button
if(isset($_GET['featured'])) {
	$id = (int)$_GET['id'];
	$featured = (int)$_GET['featured'];
	$featuredSql = "UPDATE products SET featured = '$featured' WHERE id = '$id'";
	mysqli_query($db, $featuredSql);
	header('Location: products.php');
}
?>

<h2 class="text-center">Products</h2>
<!-- Button to add new product goes here -->
<a href="products.php?add=1" class="btn btn-success pull-right" id="add-product-btn">Add Product</a><div class="clearfix"></div>
<hr>
<table class="table table-border table-condensed table-striped">
	<thead><th></th><th>Product</th><th>Price</th><th>Categories</th><th>Featured</th><th>Sold</th></thead>
	<tbody>
		<?php while($product = mysqli_fetch_assoc($presults)): 
		// Trying to display the parent category for every product
			$child_id = $product['categories'];
			$catSql = "SELECT * FROM categories WHERE id = '$child_id'";
			$result = mysqli_query($db, $catSql);
			$child = mysqli_fetch_assoc($result);
			$parentID = $child['parent_id'];
			$pSql = "SELECT * FROM categories WHERE id = '$parentID'";
			$presult = mysqli_query($db, $pSql);
			$parent = mysqli_fetch_assoc($presult);
			$category = $parent['category'] . '-' . $child['category'];
			// Idea for future. Will have nested categories. Only display immediate parent category of product
		?>
			<tr>
				<td>
					<a href="?edit=<?php echo $product['id']; ?>" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-pencil"></span></a>
					<a href="?delete=<?php echo $product['id']; ?>" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-remove"></span></a>
				</td>
				<td><?php echo $product['title']; ?></td>
				<td><?php echo money($product['price']); ?></td>
				<td><?php echo $category; ?></td>
				<td><a class="btn btn-xs btn-default" href="products.php?featured=<?php echo (($product['featured'] == 0)?'1':'0') ?>&id=<?php echo $product['id']; ?>"><span class="glyphicon glyphicon-<?php echo (($product['featured'] == 1)?'minus':'plus') ?>"></span>
				</a>&nbsp <?php echo (($product['featured'] == 1)?'Featured Product':'') ?></td>
				<td>0</td>
			</tr>
		<?php endwhile; ?>
	</tbody>
</table>


<?php  }
include('includes/footer.php');
?>