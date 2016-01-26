<?php require_once('core/init.php'); ?>

<?php include('includes/head.php'); ?>
	<!-- Top Nav Bar -->
<?php include('includes/navigation.php'); ?>

	<!--  Header  -->

<?php include('includes/headerfull.php'); ?>
		<!-- Remember you can do any combination as long as they add up to 12 -->
		<!-- This will be the left sidebar -->
<?php include('includes/leftsidebar.php');  ?>

<?php 

$sql = "SELECT * FROM products WHERE featured = 1";

?>


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

			</div>
		</div>


		<!-- right sidebar -->
<?php include('includes/rightbar.php'); ?>


<?php include('includes/footer.php'); ?>