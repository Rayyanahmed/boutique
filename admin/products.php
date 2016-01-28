<?php 
require_once($_SERVER['DOCUMENT_ROOT'] . '/boutique/core/init.php');
include('includes/head.php');
include('includes/navigation.php');
$sql = "SELECT * FROM products";
?>

<h2 class="text-center">Products</h2><hr>
<table class="table table-border table-condensed table-striped">
	<thead><th></th><th>Product</th><th>Price</th><th>Categories</th><th>Featured</th><th>Sold</th></thead>
	<tbody></tbody>
</table>


<?php
include('includes/footer.php');
?>