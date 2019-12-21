<?php 
	if(isset($_POST['submit'])){
		$file = $_FILES["file"];
		if(!empty($file["name"])){
		move_uploaded_file($file["tmp_name"], "uploads/" . $file["name"]);
		header("location: index.php");
		}
		else{
			header("location: index.php?error=Select file");
		}
	}
	else{
		header("location: index.php?error=Select file");
	}
	
?>