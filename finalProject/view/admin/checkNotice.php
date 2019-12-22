<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>notice check</title>
</head>
<body>
	<fieldset>
	<legend>Notices</legend>
	<table border="1px">
		<tr>
			<th>Heading</th>
			<th>Notice</th>
		</tr>
		<?php
			$conn = mysqli_connect('localhost', 'root', '', 'sms');
			$sql1 = "select * from notice";
			$result1 = mysqli_query($conn, $sql1);

			while($user1 = mysqli_fetch_assoc($result1)){
				if($user1['subject'] == "Admin"){
				?>
				<tr>
					<td><?php echo $user1["title"]; ?></td>
					<td><?php echo $user1["description"]; ?></td>
					
				</tr>
				
				<?php
				}

			}

		?>
		<tr>
			<td><a href="../../action/teacher/logout.php"><b>Logout</b></a></td>
			<td><a href="../../action/teacher/teacherHome.php"><b>Home</b></a></td>
		</tr>
	</table>
	</fieldset>

</body>
</html>