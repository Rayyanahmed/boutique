<?php 

// $_SERVER['DOCUMENT_ROOT'] gives us the base path to server
// makes including files a lot easier

define('BASEURL', $_SERVER['DOCUMENT_ROOT'] . '/boutique/');
echo BASEURL;

?>