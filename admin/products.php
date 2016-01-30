<?php 
require_once($_SERVER['DOCUMENT_ROOT'] . '/boutique/core/init.php');
include('includes/head.php');
include('includes/navigation.php');
$brandQuery = mysqli_query($db, "SELECT * FROM brand ORDER BY brand");
$parentQuery = mysqli_query($db, "SELECT * FROM categories WHERE parent_id = 0 ORDER BY category");
// This will prevent getting errors
$title = ((isset($_POST['title']) && $_POST['title'] != '')?sanitize($_POST['title']):'');


if(isset($_GET['edit'])) {
	// We have to know this in order to know what to put in form action
	$edit_id = (int)$_GET['edit'];
}

if($_POST) {
	$title = sanitize($_POST['title']);
	$brand = sanitize($_POST['brand']);
	$categories = sanitize($_POST['child']);
	$price = sanitize($_POST['price']);
	$list_price = sanitize($_POST['list_price']);
	$sizes = sanitize($_POST['sizes']);
	$description = sanitize($_POST['description']);
	$errors = array();
	if(!empty($_POST['sizes'])) {
		$sizeString = sanitize($_POST['sizes']);
		// When going through the loop we have a comma at the very end so we are
		// going to get rid of that with this rtrim function
		$sizeString = rtrim($sizeString, ',');
		$sizesArray = explode(',', $sizeString);
		$sArray = array();
		$qArray = array();
		foreach($sizesArray as $ss) {
			$s = explode(':', $ss);
			$sArray[] = $s[0];
			$qArray[] = $s[1];
		}
	} else { $sizesArray = array();}
	$required = array('title', 'price', 'brand', 'parent', 'sizes');
	foreach($required as $field) {
		if($_POST[$field] == '') {
			$errors[] = 'You cannot leave ' . $field . ' empty';
		}
	}

	// Ready for photo validation
	if(!empty($_FILES)) {
		var_dump($_FILES);
		$photo = $_FILES['photo'];
		$name = $photo['name'];
		$nameArray = explode('.', $name);
		$filename = $nameArray[0];
		$fileExt = $nameArray[1];
		$mime = explode('/', $photo['type']);
		$mimeType = $mime[0];
		$mimeExt = $mime[1];
		$tmpLoc = $photo['type'];
		$fileSize = $photo['size'];
		$allowed = array('png', 'jpg', 'jpeg', 'gif');
		if($mimeType != 'image') {
			$errors[] = 'The file must be an image';
		}
		if (!in_array($fileExt, $allow)) {
			$errors[] = 'The photo extension must be a png, jpeg, jpg, or gif';
		}
	}

	if(!empty($errors)) {
		echo display_errors($errors);
	} else {
		// Will handle photo later
		$insertSql = "INSERT INTO products (`title`, `price`, `list_price`, `brand_id`, `categories`, `sizes`, `description`) 
					VALUES ('$title', '$price', '$list_price', '$brand', '$categories', '$sizes', '$description')";
		mysqli_query($db, $insertSql);
	}
}
if (isset($_GET['add']) || isset($_GET['edit'])) {

?>
	<h2 class="text-center"><?php echo ((isset($_GET['edit']))?'Edit':'Add A New'); ?> Product</h2><tr>
	<!-- We want to change this action incase we are editing a product -->
	<form action="products.php?<?php echo ((isset($_GET['edit']))?'edit'.$edit_id:'add=1'); ?>" method="POST" entype="multipart/form-data">
		<div class="form-group col-md-3">
			<label for="title">Title*</label>
			<input class="form-control" type="text" name="title" id="title" value="<?php echo $title; ?>">
		</div>
		<div class="form-group col-md-3">
			<label for="brand">Brand*</label>
			<select class="form-control" id="brand" name="brand">
				<option value="<?php ((isset($_POST['brand']) && $_POST['brand'] == '')?' selected':'') ?>"></option>
				<?php while($brand = mysqli_fetch_assoc($brandQuery)): ?>
					<option value="<?php echo $brand['id']; ?>"<?php ((isset($_POST['brand']) && $_POST['brand'] == $brand['id']))?' selected':''?>><?php echo $brand['brand']; ?></option>
				<?php endwhile; ?>
			</select>
		</div>
		<div class="form-group col-md-3">
			<label for="parent">Parent Category:*</label>
			<select class="form-control" id="parent" name="parent">
				<option value=""></option>
				<?php while($parent = mysqli_fetch_assoc($parentQuery)): ?>
					<option value="<?php echo $parent['id']; ?>"><?php echo $parent['category']; ?></option>
				<?php endwhile; ?>
			</select>
		</div>
		<div class="form-group col-md-3">
			<label for="child">Child Category:*</label>
			<select id="child" name="child" class="form-control">
			</select>
		</div>
		<div class="form-group col-md-3">
			<label for="price">Price:*</label>
			<input type="text" id="price" name="price" class="form-control" value="<?php echo ((isset($_POST['price']))?$_POST['price']:''); ?>">
		</div>
		<div class="form-group col-md-3">
			<label for="list_price">List Price:*</label>
			<input type="text" id="list_price" name="list_price" class="form-control" value="<?php echo ((isset($_POST['list_price']))?$_POST['list_price']:''); ?>">
		</div>
		<div class="form-group col-md-3">
			<label>Quantity & Sizes:*</label>
			<button class="btn btn-default" onclick="jQuery('#sizesModal').modal('toggle');return false;">Quantity & Sizes</button>
		</div>
		<div class="form-group col-md-3">
			<label for="sizes">Sizes & Qty Preview</label>
			<input type="text"  class="form-control" name="sizes" id="sizes" value="<?php echo ((isset($_POST['sizes']))?$_POST['sizes']:'') ?>" readonly>
		</div>
		<div class="form-group col-md-6">
			<label for="photo">Product Photo:</label>
			<input type="file" name="photo" id="photo" class="form-control">
		</div>
		<div class="form-group col-md-6">
			<label for="description">Description:</label>
			<textarea name="description" id="description" rows="6" class="form-control"></textarea>
		</div>
		<div class="form-group pull-right col-md-3">
			<a href="products.php" class="btn btn-default">Cancel</a>
			<input type="submit" value="<?php echo ((isset($_GET['edit']))?'Edit':'Add') ?> Product" class="btn btn-success pull-right">
		</div>
	</form>

	<!-- Modal -->
<div class="modal fade" id="sizesModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="sizesModalLabel">Size & Quantity</h4>
      </div>
      <div class="modal-body">
      	<div class="container-fluid">
      	<!-- Notes the form md-col still add to 12 to take up modal -->
        <?php for($i = 1; $i <= 12; $i++): ?>
        	<div class="form-group col-md-4">
        		<label for="size<?php echo $i; ?>">Size:</label>
        		<input type="text" class="form-control" name="size<?php echo $i; ?>" value="<?php echo ((!empty($sArray[$i-1]))?$sArray[$i-1]:''); ?>" id="size<?php echo $i; ?>">
        	</div>
        	<div class="form-group col-md-2">
        		<label for="qty<?php echo $i; ?>">Quantity:</label>
        		<input type="number" class="form-control" name="qty<?php echo $i; ?>" value="<?php echo ((!empty($qArray[$i-1]))?$qArray[$i-1]:''); ?>" min=0 id="qty<?php echo $i; ?>">
        	</div>
    	<?php endfor; ?>
    	</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="updateSizes();jQuery('#sizesModal').modal('toggle');return false;">Save changes</button>
      </div>
    </div>
  </div>
</div>
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