<?php include('includes/head.php'); ?>
	<!-- Top Nav Bar -->
<?php include('includes/navigation.php'); ?>

	<!--  Header  -->

<?php include('includes/headerfull.php'); ?>
		<!-- Remember you can do any combination as long as they add up to 12 -->
		<!-- This will be the left sidebar -->
<?php include('includes/leftsidebar.php');  ?>


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
<?php include('includes/rightbar.php'); ?>


<?php include('includes/footer.php'); ?>