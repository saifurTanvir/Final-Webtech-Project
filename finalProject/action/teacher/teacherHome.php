<?php 
	session_start();
	if(isset($_SESSION['id'])){
		?>

		<!DOCTYPE html>
		<html>
		<head>
			<title>teachers home</title>
		</head>
		<body>
			<fieldset>
			<legend>Teachers Home</legend>
			
			<table border="1px">
				<tr>
					<?php
					$conn = mysqli_connect('localhost', 'root', '', 'sms');
					$sql1 = "select teachername from subject where teacherid='{$_SESSION['id']}'";
					$result1 = mysqli_query($conn, $sql1);
					$user1 = mysqli_fetch_assoc($result1);

					?>
					<td colspan="2" style="color: blue" align="center"><h1>Welcome <?php echo $user1['teachername']; ?></h1></td>
		
				</tr>
				<tr>
					<td><a href="../../view/teacher/settings.php"><b> Settings</b></a></td>
					<td><a href="../../view/teacher/teachersProfile.php"><b> My Profile</b></a></td>
				</tr>
				<tr>
					<td><a href="../../view/teacher/classSchedule.php"><b> Class Schedule</b></a></td>
					<td><a href="../../view/admin/library.php"><b> Library</b></a></td>
				</tr>
				<tr>
					<td><a href="../../view/search/index.php"><b> Search Student</b></a></td>
					<td><a href="../../view/student/marks/marksIndex.php"><b> Marks Management</b></a></td>
				</tr>
				<tr>
					<td><a href="../../view/teacher/file/index.php"><b> Note Management</b></a></td>
					<td><a href="../../view/admin/Forms/index.php"><b> Download File</b></a></td>
					
				</tr>
				<tr>
					<td><a href="../../view/student/noticeUpload.php"><b> Notice Upload</b></a></td>
					<td><a href="../../view/student/deleteNotice.php"><b> Notice Delete</b></a></td>
					
				</tr>
				<tr>
					<td><a href="../../view/student/studentReview.php"><b> Student Review</b></a></td>
					<td><a href="../../view/admin/checkNotice.php"><b> Notice Check</b></a></td>
				</tr>
				<tr>
					<td><a href="../../view/teacher/writeArticle.php"><b>Writting Article</b></a></td>
					<td><a href="../../view/admin/showSchoolInfo.php"><b>Show School Info</b></a></td>
				</tr>
				<tr>
					<td colspan="2"><a href="../../view/admin/viewArticle.php"><b> Sharpen Knowledge</b></a></td>
				</tr>
			</table>
			</fieldset>
		</body>
		</html>


		<?php
	}
	else{
		header('location: ../../index.php');
	}
?>