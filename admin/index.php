<?php ob_start(); ?>
<?php include('../header.php'); ?>
<link rel="canonical" href="http://constructionlinx.com/" />
<title>Construction Linx News Manager</title>
<?php include('../nav.php');

if (version_compare(PHP_VERSION, '5.3.7', '<')) {
	exit("Sorry, Simple PHP Login does not run on a PHP version smaller than 5.3.7 !");
} else if (version_compare(PHP_VERSION, '5.5.0', '<')) {
	require_once("libraries/password_compatibility_library.php");
}
require_once("config/db.php");
require_once("classes/Login.php");
$login = new Login();
if ($login->isUserLoggedIn() == true) {
	include("views/logged_in.php");
} else {
	include("views/not_logged_in.php");
}

include('../footer.php'); ?>
