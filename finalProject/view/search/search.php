<?php 
	
	require_once('../../db/db.php');

	$id = $_POST['key'];
	$con = getConnection();
	$sql = "select studentid from student where studentid like '%{$id}'";
	$result = mysqli_query($con, $sql);
	$row = "";
	while($data = mysqli_fetch_assoc($result)){
		$row .= $data['studentid']."|";
	}
	echo $row;
?>


