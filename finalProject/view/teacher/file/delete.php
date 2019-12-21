<?php  
	unlink($_GET["name"]);
	header("location: index.php");
?>