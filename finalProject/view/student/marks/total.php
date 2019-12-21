<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>total marks</title>
</head>
<body>
	<table border="1px">
		<tr>
			<td colspan="6"><h1>Marks Overview</h1></td>
		</tr>
		<tr>
			<td><b>Serial No</b></td>
			<td><b>ID</b></td>
			<td><b>Name</b></td>
			<td><b>Mid(40%)</b></td>
			<td><b>Final(60%)</b></td>
			<td><b>Total</b></td>
		</tr>
		<?php
			$conn = mysqli_connect('localhost', 'root', '', 'sms');
			$sql1 = "select * from midmarks where subject='{$_SESSION['subjectForMarks']}'";
			$sql2 = "select * from finalmarks where subject='{$_SESSION['subjectForMarks']}'";

			$result1 = mysqli_query($conn, $sql1);
			$result2 = mysqli_query($conn, $sql2);

			while(($user1 = mysqli_fetch_assoc($result1)) && ($user2 = mysqli_fetch_assoc($result2))){
				?>
				<tr>
					<td><?php echo $user1["serialno"]; ?></td>
					<td><?php echo $user1["studentid"]; ?></td>
					<td><?php echo $user1["name"]; ?></td>
					<td><?php echo $user1["total"]*.4; ?></td>
					<td><?php echo $user2["total"]*.6; ?></td>
					<td><?php echo $user1["total"]*.4 + $user2["total"]*.6; ?></td>
				</tr>
				<?php

			}

		?>
		<tr>
			<td colspan="5"><a href="logout.php"><b>Logout</b></a></td>
			<td><a href="../../../action/teacher/teacherHome.php"><b>Home</b></a></td>
		</tr>
		
		
	</table>

</body>
</html>
