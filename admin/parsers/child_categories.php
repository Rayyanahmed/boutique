<?php
// In our ajax request we are sending this parentID as data
$parentID = (int)($_POST['parentID']);
$childQuery = mysqli_query($db, "SELECT * FROM categories WHERE parent_id = '$parentID' ORDER BY category");

?>