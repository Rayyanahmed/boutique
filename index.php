<!DOCTYPE html>
<html>
<head>
	<title>Shaunta's Boutique</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
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
					<img src="images/products/men4.png" alt="Levis Jeans" />
					<!-- All these classes so we can target later -->
					<p class="list-price text-danger">List Price <s>$54.99</s></p>
					<p class="price">Our Price: 19.99</p>
					<button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
				</div>

				<div class="col-md-3">
					<h4>Levis Jeans</h4>
					<img src="images/products/men4.png" alt="Levis Jeans" />
					<!-- All these classes so we can target later -->
					<p class="list-price text-danger">List Price <s>$54.99</s></p>
					<p class="price">Our Price: 19.99</p>
					<button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
				</div>

				<div class="col-md-3">
					<h4>Levis Jeans</h4>
					<img src="images/products/men4.png" alt="Levis Jeans" />
					<!-- All these classes so we can target later -->
					<p class="list-price text-danger">List Price <s>$54.99</s></p>
					<p class="price">Our Price: 19.99</p>
					<button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
				</div>

				<div class="col-md-3">
					<h4>Levis Jeans</h4>
					<img src="images/products/men4.png" alt="Levis Jeans" />
					<!-- All these classes so we can target later -->
					<p class="list-price text-danger">List Price <s>$54.99</s></p>
					<p class="price">Our Price: 19.99</p>
					<button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
				</div>

				<div class="col-md-3">
					<h4>Levis Jeans</h4>
					<img src="images/products/men4.png" alt="Levis Jeans" />
					<!-- All these classes so we can target later -->
					<p class="list-price text-danger">List Price <s>$54.99</s></p>
					<p class="price">Our Price: 19.99</p>
					<button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
				</div>

				<div class="col-md-3">
					<h4>Levis Jeans</h4>
					<img src="images/products/men4.png" alt="Levis Jeans" />
					<!-- All these classes so we can target later -->
					<p class="list-price text-danger">List Price <s>$54.99</s></p>
					<p class="price">Our Price: 19.99</p>
					<button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
				</div>

				<div class="col-md-3">
					<h4>Levis Jeans</h4>
					<img src="images/products/men4.png" alt="Levis Jeans" />
					<!-- All these classes so we can target later -->
					<p class="list-price text-danger">List Price <s>$54.99</s></p>
					<p class="price">Our Price: 19.99</p>
					<button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
				</div>

				<div class="col-md-3">
					<h4>Levis Jeans</h4>
					<img src="images/products/men4.png" alt="Levis Jeans" />
					<!-- All these classes so we can target later -->
					<p class="list-price text-danger">List Price <s>$54.99</s></p>
					<p class="price">Our Price: 19.99</p>
					<button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
				</div>
			</div>
		</div>


		<!-- right sidebar -->
		<div class="col-md-2"></div>
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