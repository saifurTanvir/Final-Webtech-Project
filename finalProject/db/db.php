<?php

	function getConnection(){
		$conn = mysqli_connect('localhost', 'root', '', 'sms');
		return $conn;
	}
?>