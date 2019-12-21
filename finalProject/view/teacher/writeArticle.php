<?php
	session_start();
	if(isset($_POST['submit'])){
		$heading = $_POST['heading'];
		$description = $_POST['description'];
		$keywords = $_POST['keywords'];
		if((empty($heading) == true) || (empty($description) == true) || (empty($keywords) == true)){
		}
		else{
			
			$conn = mysqli_connect('localhost', 'root', '', 'sms');
			$sql1 = "insert into article values('', '{$_SESSION['id']}', '{$heading}','{$description}', '{$keywords}')";
			if(mysqli_query($conn, $sql1)){
				echo "Update successfull";
			}else{
				echo "Update Fails";
			}
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Article Writting</title>
</head>
<body> 
<form method="POST" action="#">
	<fieldset>
	<legend>Article Writting</legend>
	
	<table>
	<tr>
		<td><b>Heading: </b></td>
		<td><input type="text" name="heading"></td>
		<td><b style="color: red">*</b></td>
	</tr>
	<tr>
		<td><b>Description:: </b></td>
		<td>
			<textarea name="description" id="description"></textarea>
		</td>
		<td><b style="color: red">*</b></td>
	</tr>
	<tr>
		<td><b>Keywords</b></td>
		<td><input type="text" name="keywords"></td>
	</tr>
	<tr>
		<td colspan="2"><input type="submit" name="submit" value="Upload" onclick="validation()"></td>
	</tr>
		
	<tr>
		<td><a href="../../action/teacher/teacherHome.php"><b>Home</b></a></td>
		<td><a href="logout.php"><b>Logout</b></a></td>
	</tr>
	</table>
	</form>
	</fieldset>
</body>
</html>