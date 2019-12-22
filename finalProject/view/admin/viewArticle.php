<!DOCTYPE html>
<html>
<head>
	<title>Sharpen knowledge</title>
</head>
<body>
	<fieldset>
	<legend>Sharpen Knowledge</legend>
	<table border="1px">
		<tr>
			<th>Heading</th>
			<th>Article</th>
		</tr>
		<?php
			$conn = mysqli_connect('localhost', 'root', '', 'sms');
			$sql1 = "select * from article;";
			$result1 = mysqli_query($conn, $sql1);

			while($user1 = mysqli_fetch_assoc($result1)){
				?>
				<tr>
					<td><?php echo $user1["heading"]; ?></td>
					<td><?php echo $user1["description"]; ?></td>
					
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