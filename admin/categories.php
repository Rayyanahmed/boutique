<?php
require_once($_SERVER['DOCUMENT_ROOT']) . '/boutique/core/init.php';
include('includes/head.php');
include('includes/navigation.php');
?>

<h2 class="text-center">Categories</h2>

<div class="row">
	<div class="col-md-6"></div>
	<div class="col-md-6">
		<table class="table table-border">
			<head>
				<th>Category</th><th>Parent</th><th></th>
			</head>
		</table>
	</div>
</div>

<?php 
include('includes/footer.php');
?>