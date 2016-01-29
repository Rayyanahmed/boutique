<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/boutique/core/init.php');


// Query is fine, but ajax request is not sending the proper ID

$parentID = (int)($_POST['parentID']);
$childQuery = mysqli_query($db, "SELECT * FROM categories WHERE parent_id = '$parentID' ORDER BY category");

ob_start();
?>

<option value=""></option>
<?php while($child = mysqli_fetch_assoc($childQuery)): ?>
	<option value="<?php echo $child['id']; ?>"><?php echo $child['category']; ?></option>
<?php endwhile; ?>

<?php echo ob_get_clean(); ?>