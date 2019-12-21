<?php
	session_start();
	require_once('../../db/functions.php');

	$username = $_POST['username'];
	$password = $_POST['password'];

	$check = validate($username, $password);
	if($check > 0){
		$_SESSION['id'] = $username;
		$_SESSION['pass'] = $password;
		header("location: teacherHome.php");
		//echo "Okay";
		
	}
	else{
		$idPassMismatch =  "Id/Password mismatch!";
		header("location: ../../index.php?idPassMismatch=Id/Password mismatch!");
	}

?>