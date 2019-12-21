<?php 
	require_once('../../db/db.php');
	require_once('../../db/functions.php');
	$text = $_POST['bal'];
	$data = json_decode($text);

	$check = register($data);
	if($check == true){
		echo "Register Success";
	}
	else{
		echo "Register fails!";
	}

?>