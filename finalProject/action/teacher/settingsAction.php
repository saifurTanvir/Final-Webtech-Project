<?php
	//echo "Okay<br>"; 
	require_once('../../db/db.php');
	require_once('../../db/functions.php');
	$text = $_POST['data'];
	$data = json_decode($text);

	$check = changePassword($data);
	if($check == true){
		echo "Password change Success";
	}
	else{
		echo "Password change fails!";
	}

?>