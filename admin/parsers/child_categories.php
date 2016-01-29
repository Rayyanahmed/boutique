<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/boutque/core/init.php');
// In our ajax request we are sending this parentID as data
$parentID = (int)($_POST['parentID']);
$childQuery = mysqli_query($db, "SELECT * FROM categories WHERE parent_id = '$parentID' ORDER BY category");

ob_start();
?>

<option value=""></option>
<?php while($child = mysqli_fetch_assoc($childQuery)): ?>
	<option value="<?php echo $child['id']; ?>"><?php echo $child['category']; ?></option>
<?php endwhile; ?>

<?php echo ob_get_clean(); ?>