<?php
	session_start();
	require_once("../../db/db.php");
	require_once("../../db/functions.php");

	$con = getConnection();
	$sql = "select * from regteacher where username='{$_SESSION['id']}'";
	$result = mysqli_query($con, $sql);
	$user = mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html>
<head>
	<title>my profile</title>
</head>
<body>
	<fieldset>
	<legend>My Profile</legend>
	<table border="1px solid gray">
		<tr>
			<td colspan="2" align="center"><h1 style="color: blue">My Profile</h1></td>
		</tr>
		<tr>
			<td><b>Id: </b></td>
			<td><p><?php echo $user['id']; ?></p></td>
		</tr>
		<tr>
			<td><b>Name: </b></td>
			<td><p><?php echo $user['username']; ?></p></td>
		</tr>
		<tr>
			<td><b>Bsc Major: </b></td>
			<td><p><?php echo $user['bscMajor']; ?></p></td>
		</tr>
		<tr>
			<td><b>Msc Major: </b></td>
			<td><p><?php echo $user['mscMajor']; ?></p></td>
		</tr>
		<tr>
			<td><b>Research Topic: </b></td>
			<td><p><?php echo $user['researchTopic']; ?></p></td>
		</tr>
		<tr>
			<td><b>Address: </b></td>
			<td><p><?php echo $user['address']; ?></p></td>
		</tr>
		<tr>
			<td><b>Email: </b></td>
			<td><p><?php echo $user['email']; ?></p></td>
		</tr>
		<tr>
			<td><b>Phone: </b></td>
			<td><p><?php echo $user['phone']; ?></p></td>
		</tr>
		<tr>
			<td><a href="logout.php"><b>Logout</b></a></td>
			<td><a href="../../action/teacher/teacherHome.php"><b>Home</b></a></td>
		</tr>
	</table>
	</fieldset>

</body>
</html>