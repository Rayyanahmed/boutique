<?php require_once('../core/init.php'); ?>
<?php ob_start(); ?>

<?php 
$id = $_POST['id'];
$id = (int)$id;
$sql = "SELECT * FROM products WHERE id = '" . $id . "' ";
$result = mysqli_query($db, $sql);
$product = mysqli_fetch_assoc($result);
$brand_id = $product['brand_id'];
$sql = "SELECT brand FROM brand WHERE id = '" . $brand_id . "'";
$brand_query = mysqli_query($db, $sql);
$brand_array = mysqli_fetch_assoc($brand_query);
$brand = $brand_array['brand'];

?>
<div class="modal fade details-1" id="details-modal" tabindex="-1" role="dialog" aria-label="details-1" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<!-- all going to be dynamic later -->
					<h4 class="modal-title" class="text-center"><?php echo $product['title']; ?></h4>
				</div>
				<div class="modal-body">
					<!-- we are going to put container fluid inside the modal body so we can
					give it cols -->
					<div class="container-fluid">
						<div class="row">
							<div class="col-sm-6">
								<!-- to wrap image around -->
								<div class="center-block">
									<img src="<?php echo $product['image']; ?>" alt="Levis Jeans" class="details img-responsive">
								</div>
							</div>
							<div class="col-sm-6">
								<h4>Details</h4>
								<p><?php echo $product['description']; ?></p>
								<hr>
								<p>Price: $34.99</p>
								<p>Brand: <?php echo $brand; ?></p>
								<form action="add_cart.php" method="post">
									<div class="form-group">
										<!-- Allows us to control width of input -->
										<div class="col-xs-3">
											<label for="quantity">Quantity</label>
											<input type="text" class="form-control" id="quantity" name="quantity">
										</div><div class="col-xs-9"></div>
										<p>Available: 3</p>
									</div><br><br>
									<div class="form-group">
										<label for="size"></label>
										<select name="size" id="size" class="form-control">Size
											<option value=""></option>
											<option value="28">28</option>
											<option value="32">32</option>
											<option value="36">36</option>
										</select>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button class="btn btn-default" data-dismiss="modal">Close</button>
					<button class="btn btn-warning" type="submit" class="glyphicon glyphicon-shopping-cart"><span>Add to Cart</span></button>
				</div>
			</div>
		</div>
	</div>
	<!-- Still not dynamic, we are exactly where we left off --> 
<?php echo ob_get_clean(); ?>
