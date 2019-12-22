<?php
	session_start();
	if(isset($_POST['submit'])){
		$subject = $_POST['subject'];
		$heading = $_POST['heading'];
		$des = $_POST['description'];
		if((empty($_POST['subject']) == true) || (empty($_POST['heading']) == true) || (empty($_POST['description']) == true)){
		}
		else{
			$conn = mysqli_connect('localhost', 'root', '', 'sms');
			$sql1 = "insert into notice values('', '{$_POST["subject"]}','{$_POST["heading"]}', '{$_POST["description"]}')";
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
	<title>Notice Upload</title>
</head>
<body> 
<form method="POST" action="#">
	<fieldset>
	<legend>Notice upload</legend>
	
	<table>
	<tr>
		<td><b>Select Subject: </b></td>
		<td>
			<select name="subject">
		    <option value="">Demo</option>
		    <option value="dataStructure">Data Structure[F]</option>
		    <option value="algorithm">Algorithm[K]</option>
		    <option value="cpp">CPP</option>
		  </select>
		</td>
		<td><b style="color: red">*</b></td>
	</tr>
	<tr>
		<td><b>Notice Heading:</b> </td>
		<td><input type="text" name="heading"></td>
		<td><b style="color: red">*</b></td>
	</tr>
	<tr>
		<td><b>Write Notice: </b></td>
		<td>
			<textarea name="description" id="description"></textarea>
		</td>
		<td><b style="color: red">*</b></td>
	</tr>
	<tr>
		<td colspan="2"><input type="submit" name="submit" value="Upload" onclick="validation()"></td>
	</tr>
		
	<tr>
		<td><a href="../../action/teacher/logout.php"><b>Logout</b></a></td>
		<td><a href="../../action/teacher/teacherHome.php"><b>Home</b></a></td>
	</tr>
	</table>
	</form>
	</fieldset>
</body>
</html>