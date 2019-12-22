<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>student review</title>
</head>
<body>
	<fieldset>
	<legend>Student Reviews</legend>
	<table border="1px">
		<tr>
			<th>Subject</th>
			<th>Comments</th>
		</tr>
		<?php
			$conn = mysqli_connect('localhost', 'root', '', 'sms');
			$sql1 = "select * from review where teacherid='{$_SESSION['id']}'";
			$result1 = mysqli_query($conn, $sql1);

			while($user1 = mysqli_fetch_assoc($result1)){
				?>
				<tr>
					<td><?php echo $user1["subjectname"]; ?></td>
					<td><?php echo $user1["comments"]; ?></td>
					
				</tr>
				<?php

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