<?php 

$db = mysqli_connect('127.0.0.1', 'root', '', 'boutique');

if(mysqli_connect_errno($db)) {
	echo 'Database connection failed with following errors: ' . mysqli_connect_error();
	die();
}

// We defined the config file as a relative file instead of an absolute file, which is fine for
// being required in the admin folder but breaks our main site
require_once('../config.php');
require_once(BASEURL . 'helpers/helpers.php');


?>