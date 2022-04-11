<?php
include_once '../index.php';
include_once 'database.php';

	$section = mysqli_real_escape_string($conn,$_GET['section']);

	echo "<h1>$section</h1>";

?>

