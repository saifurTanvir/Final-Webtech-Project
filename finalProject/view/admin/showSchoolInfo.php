<!DOCTYPE html>
<html>
<head>
	<title>school info</title>
</head>
<body>
	<fieldset>
	<legend>School Info</legend>
	<table border="1px">
		<tr>
			<th>Role</th>
			<th>Name</th>
			<th>Phone</th>
			<th>Email</th>
		</tr>
		<?php
			$conn = mysqli_connect('localhost', 'root', '', 'sms');
			$sql1 = "select * from schoolinfo;";
			$result1 = mysqli_query($conn, $sql1);

			while($user1 = mysqli_fetch_assoc($result1)){
				?>
				<tr>
					<td><?php echo $user1["role"]; ?></td>
					<td><?php echo $user1["name"]; ?></td>
					<td><?php echo $user1["phone"]; ?></td>
					<td><?php echo $user1["email"]; ?></td>
					
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