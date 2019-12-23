<?php 
	session_start(); 
	require_once('../../../db/db.php');
	//$conn = mysqli_connect('localhost', 'root', '', 'sms');

	if(isset($_POST['submit'])){
		$subject = $_POST['subject'];
		$_SESSION['subjectForMarks'] = $subject;
		$term = $_POST['term'];
		echo $term;
		//echo $subject;
		if(empty($subject) || empty($term)){
			echo "Select Subject and Term.";
		}
		else{
			//$conn = getConnection();
			if($term == "Mid"){
				//Session e kore mid.php te niye jabo, query kore mid table 
				//theke data
				//$sql = "select * from midmarks where subject='{$subject}'";
				header("location: mid.php");
			}
			else if($term == "Final"){
				//echo "Okay";
				//$sql = "select * from finalmarks where subject='{$subject}'"; 
				header("location: final.php");
			}
			else if($term == "Total"){
				//$sql = "select * from student where subject='{$subject}'";
				header("location: total.php");
			}
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>marks management</title>
</head>
<body>
	<fieldset>
	<legend>Marks Management</legend>
	<form method="POSt" action="#">
	<table>
		<tr>
			<td><b>Select Subject: </b></td>
			<td>
			<select name="subject">
		    	<option value="">Demo</option>
				<?php
					$conn = mysqli_connect('localhost', 'root', '', 'sms');
					$sql1 = "select * from subject where teacherid='{$_SESSION['id']}'";
					$result1 = mysqli_query($conn, $sql1);

					while($user1 = mysqli_fetch_assoc($result1)){
						?>
						<option value="<?php echo $user1["subject"]; ?>"> <?php echo $user1["subject"]; ?></option>

						<?php

					}

				?>
		 	</select>
			</td>
		</tr>
		<tr>
			<td><b>Select Term: </b></td>
			<td>
				<select name="term">
			    <option value="">Demo</option>
			    <option value="Mid">Mid</option>
			    <option value="Final">Final</option>
			    <option value="Total">Total</option>
			  </select>
			</td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" name="submit" value="Search"></td>
		</tr>
		<tr>
			<td><a href="../../../action/teacher/logout.php"><b>Logout</b></a></td>
			<td><a href="../../../action/teacher/teacherHome.php"><b>Home</b></a></td>
		</tr>
	</table>
	</form>
	</fieldset>

</body>
</html>