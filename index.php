<?php include('includes/head.php') ?>
	<!-- Top Nav Bar -->
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<a href="index.php" class="navbar-brand">Shaunta's Boutique</a>
			<ul class="nav navbar-nav">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Men<span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="#">Shirts</a></li>
						<li><a href="#">Pants</a></li>
						<li><a href="#">Shoes</a></li>
						<li><a href="#">Accessories</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</nav>

	<!--  Header  -->

	<div id="headerWrapper">
		<div id="back-flower"></div>
		<div id="logotext"></div>
		<div id="fore-flower"></div>
	</div>
	
	<!-- Going to put entire page in here. class container- fluid allows us -->
	<!-- to take advantage of the grid system -->
	<div class="container-fluid">
		<!-- Remember you can do any combination as long as they add up to 12 -->
		<!-- This will be the left sidebar -->
		<div class="col-md-2"></div>
		<!-- main content -->
		<div class="col-md-8">
			<div class="row">
				<h2 class="text-center">Featured Products</h2>
				<div class="col-md-3">
					<h4>Levis Jeans</h4>
					<img src="images/products/men4.png" alt="Levis Jeans" class="img-thumb"/>
					<!-- All these classes so we can target later -->
					<p class="list-price text-danger">List Price <s>$54.99</s></p>
					<p class="price">Our Price: 19.99</p>
					<button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
				</div>

				<div class="col-md-3">
					<h4>Hollister Shirt</h4>
					<img src="images/products/men1.png" alt="Hollister shirt" class="img-thumb"/>
					<!-- All these classes so we can target later -->
					<p class="list-price text-danger">List Price <s>$25.99</s></p>
					<p class="price">Our Price: 19.99</p>
					<button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
				</div>

				<div class="col-md-3">
					<h4>Fancy Shoes</h4>
					<img src="images/products/women6.png" alt="Fancy Shoes" class="img-thumb"/>
					<!-- All these classes so we can target later -->
					<p class="list-price text-danger">List Price <s>$69.99</s></p>
					<p class="price">Our Price: 49.99</p>
					<button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
				</div>

				<div class="col-md-3">
					<h4>Boys Hoodie</h4>
					<img src="images/products/boys1.png" alt="Boy's Hoodie" class="img-thumb"/>
					<!-- All these classes so we can target later -->
					<p class="list-price text-danger">List Price <s>$24.99</s></p>
					<p class="price">Our Price: 18.99</p>
					<button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
				</div>

				<div class="col-md-3">
					<h4>Levis Jeans</h4>
					<img src="images/products/men4.png" alt="Levis Jeans" class="img-thumb"/>
					<!-- All these classes so we can target later -->
					<p class="list-price text-danger">List Price <s>$54.99</s></p>
					<p class="price">Our Price: 19.99</p>
					<button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
				</div>

				<div class="col-md-3">
					<h4>Girls Dress</h4>
					<img src="images/products/men4.png" alt="Girls Dress" class="img-thumb"/>
					<!-- All these classes so we can target later -->
					<p class="list-price text-danger">List Price <s>$34.99</s></p>
					<p class="price">Our Price: $22.99</p>
					<button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
				</div>

				<div class="col-md-3">
					<h4>Woman's Shirt</h4>
					<img src="images/products/women3.png" alt="Woman's Shirt" class="img-thumb"/>
					<!-- All these classes so we can target later -->
					<p class="list-price text-danger">List Price <s>$45.99</s></p>
					<p class="price">Our Price: 29.99</p>
					<button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
				</div>

				<div class="col-md-3">
					<h4>Women's Skirt</h4>
					<img src="images/products/girls3.png" alt="Woman's Skirt" class="img-thumb"/>
					<!-- All these classes so we can target later -->
					<p class="list-price text-danger">List Price <s>$29.99</s></p>
					<p class="price">Our Price: 19.99</p>
					<button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
				</div>
			</div>
		</div>


		<!-- right sidebar -->
		<div class="col-md-2"></div>
	</div>

	<!-- Lets add a footer outside the main-page div because we want the footer to be full page as well 
		id is to use later for css -->
	<footer class="text-center" id="footer">
		&copy; Copyright 2013-15 Shaundas Boutique
	</footer>

	<!-- Details Modal -->

	<div class="modal fade details-1" id="details-1" tabindex="-1" role="dialog" aria-label="details-1" aria-hidden="true">
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

	<script>
		// Target the window
		$(window).scroll(function() {
			// scrollTop tells us how many pixels we have scrolled from the top
			var vscroll = $(this).scrollTop();
			// this function will keep the text logo centered while we scroll
			// if we didn't divide by 2 it would just stay there and not move at all
			$('#logotext').css({
				"transform" : "translate(0px, " + vscroll/2 + "px)"
			});

			var vscroll = $(this).scrollTop();
			$('#fore-flower').css({
				// the negative makes it scroll up
				"transform" : "translate(0px, -" + vscroll/2 + "px)"
			});
		});

	</script>
</body>
</html>