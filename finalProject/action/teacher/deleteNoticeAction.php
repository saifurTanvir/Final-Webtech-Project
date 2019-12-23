<?php
	//echo $_POST['value'];

	$conn = mysqli_connect('localhost', 'root', '', 'sms');
	$sql1 = "DELETE FROM notice where title='{$_POST["value"]}' ";
	if(mysqli_query($conn, $sql1)){
		echo "Delete Success";
	}
	else{
		echo "Delete Fails";
	}

			
?>