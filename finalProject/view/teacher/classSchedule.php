<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>class schedule</title>
</head>
<body>
	<fieldset>
		<legend>Class Schedule</legend>
	<table border="1px">
		<tr>
			<th><b>subject</b></th>
			<th><b>Time</b></th>
		</tr>
		<?php
			$conn = mysqli_connect('localhost', 'root', '', 'sms');
			$sql1 = "select * from subject where teacherid='{$_SESSION['id']}'";
			$result1 = mysqli_query($conn, $sql1);

			while($user1 = mysqli_fetch_assoc($result1)){
				?>
				<tr>
					<td><?php echo $user1["subject"]; ?></td>
					<td><?php echo $user1["time"]; ?></td>
					
				</tr>
				<?php

			}

		?>
		<tr>
			<td><a href="logout.php"><b>Logout</b></a></td>
			<td><a href="../../action/teacher/teacherHome.php"><b>Home</b></a></td>
		</tr>
	</table>
	</fieldset>

</body>
</html>