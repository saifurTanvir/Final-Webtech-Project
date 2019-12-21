<?php
	session_start();
	require_once('../../../db/db.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>final marks update</title>
</head>
<body>
	<fieldset>
	<legend>Final term Marks Update</legend>
	<form method="POST" action="#">
	<table border="1px">
		<tr>
			<th>Serial No</th>
			<th>Id</th>
			<th>Name</th>
			<th>Quizes</th>
			<th>Assignment</th>
			<th>Term</th>
			<th>Total</th>
		</tr>
		<?php
			$conn = getConnection();
			$sql = "select * from finalmarks where subject='{$_SESSION['subjectForMarks']}'";
			$result = mysqli_query($conn, $sql);
			$count = 0;
			while ($data = mysqli_fetch_assoc($result)){
				?>

				<tr>
					<td><?php echo $data['serialno']; ?></td>
					<td><?php echo $data['studentid'];  $studentid[$count] = $data['studentid']; ?></td>
					<td><?php echo  $data['name'];?></td>
					<td><input type="text" name="<?php echo "quiz".$count; ?>" value="<?php echo $data['quiz']; ?>"></td>
					<td><input type="text" name="<?php echo "assignment".$count; ?>" value="<?php echo $data['assignment']; ?>"></td>
					<td><input type="text" name="<?php echo "term".$count; ?>" value="<?php echo $data['term']; ?>"></td>
					<td><input type="text" name="total" value="<?php echo $data['quiz']+$data['assignment']+$data['term']; ?>"></td>
				</tr>

				<?php
				$count++;
			}
		?>
		<tr>
			<td colspan="7"><input type="submit" name="submit" value="Submit"></td>
		</tr>
		<tr>
			<td><a href="logout.php"><b>Logout</b></a></td>
			<td colspan="5"></td>
			<td align="right"><a href="../../../action/teacher/teacherHome.php"><b>Home</b></a></td>
		</tr>
		
	</table>
	</form>
	</fieldset>


</body>
</html>

<?php
	if(isset($_POST['submit'])){

		for($i = 0; $i < $count; $i++){
			$quizMark = "quiz".$i;
			$assignmentMark = "assignment".$i;
			$termMark = "term".$i;
			$totalMark = $_POST[$quizMark] + $_POST[$assignmentMark] + $_POST[$termMark];


			$sql = "UPDATE finalmarks set quiz=$_POST[$quizMark], assignment=$_POST[$assignmentMark], term=$_POST[$termMark], total=$totalMark where subject='{$_SESSION['subjectForMarks']}' AND studentid='{$studentid[$i]}' ";

			if(mysqli_query($conn, $sql)){
				echo "Updated Successfully";
			}
			else{
				echo "Update Fail";
			}
		}
	}
?>