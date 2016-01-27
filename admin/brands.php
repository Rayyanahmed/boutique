<?php require_once('../core/init.php'); ?>
<?php require_once('includes/head.php'); ?>
<?php require_once('includes/navigation.php'); ?>
Brands
<table class="table table-bordered table-striped table-auto">
	<head>
		<th></th><th>Brand</th><th></th>
	</head>
	<tbody>
		<tr>
			<!-- The id will obviously be dynamic later on -->
			<td><a href="brands.php?edit=1" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-pencil"></span></a></td>
			<td>Levis</td>
			<td><a href="brands.php?delete=1" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-remove"></span></a></td>
		</tr>
	</tbody>
</table>
<?php require_once('includes/footer.php'); ?>