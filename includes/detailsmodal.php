<?php ob_start(); ?>
<div class="modal fade details-1" id="details-modal" tabindex="-1" role="dialog" aria-label="details-1" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<!-- all going to be dynamic later -->
					<h4 class="modal-title" class="text-center">Levis Jeans</h4>
				</div>
				<div class="modal-body">
					<!-- we are going to put container fluid inside the modal body so we can
					give it cols -->
					<div class="container-fluid">
						<div class="row">
							<div class="col-sm-6">
								<!-- to wrap image around -->
								<div class="center-block">
									<img src="images/products/men4.png" alt="Levis Jeans" class="details img-responsive">
								</div>
							</div>
							<div class="col-sm-6">
								<h4>Details</h4>
								<p>These jeans are amazing, they are straight-leg, fit great
									and look sexy. Get a pair while they last.</p>
								<hr>
								<p>Price: $34.99</p>
								<p>Brand: Levis</p>
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
	<!-- What this ob_start() function does is that it starts a buffer and reads all the data
	on this page. Then it sends it back to the ajax request as a data object. Then the ob_get_clean() method cleans up the 
	buffer ->
<?php ob_get_clean(); ?>
