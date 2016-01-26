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
$featured = mysqli_query($db, $sql);

?>


		<!-- main content -->
		<div class="col-md-8">
			<div class="row">
				<h2 class="text-center">Featured Products</h2>
				<?php while($row = mysqli_fetch_assoc($featured)) : ?>
				<div class="col-md-3">
					<h4><?php echo $row['title']; ?></h4>
					<img src="<?php echo $row['image']; ?>" alt="Levis Jeans" class="img-thumb"/>
					<!-- All these classes so we can target later -->
					<p class="list-price text-danger">List Price <s>$<?php echo $row['list_price']; ?></s></p>
					<p class="price">Our Price: <?php echo $row['price']; ?></p>
					<button type="button" class="btn btn-sm btn-success" onclick="detailsmodal()">Details</button>
				</div>
			<?php endwhile; ?>
			</div>
		</div>


		<!-- right sidebar -->
<?php include('includes/rightbar.php'); ?>

<?php include('includes/footer.php'); ?>