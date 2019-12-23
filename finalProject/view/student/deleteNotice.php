<?php
	session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>delete notice</title>
</head>
<body>
	<div id="test"></div>
	<fieldset>
	<legend>Delete Notice</legend>
		<form method="POST" action="#">
			<table border="1px">
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
					<td colspan="2"><input type="submit" name="submit" value="Search"  style="margin-left: 105px;"></td>
				</tr>
			</table>
		</form>
		<table border="1px">
			<tr>
				<th><b>Heading</b></th>
				<th><b>Notice</b></th>
				<th><b>Operation</b></th>
				</tr>
				<?php
					if(isset($_POST['submit'])){
						//echo $_POST['subject'];
						$conn = mysqli_connect('localhost', 'root', '', 'sms');
						$sql1 = "select * from notice where subject='{$_POST['subject']}'";
						$result1 = mysqli_query($conn, $sql1);
						while($user1 = mysqli_fetch_assoc($result1)){
							?>
							<tr>
								<td><?php echo $user1["title"]; ?></td>
								<td><?php echo $user1["description"]; ?></td>
								<td><button value="<?php echo $user1["title"]; ?>" onclick="f1(this.value)" > Delete</button> </td>
								
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
		<script type="text/javascript">
			function f1(value) {
				//document.getElementById('test').innerHTML = value;

				var xhttp = new XMLHttpRequest();
		        xhttp.open("POST", "../../action/teacher/deleteNoticeAction.php", true);
		        xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
		        //1.3-string send to php
		        
		        xhttp.send("value="+value);
		      
		        xhttp.onreadystatechange = function() {
		          if (this.readyState == 4 && this.status == 200) {
		            //alert(this.responseText);
		            document.getElementById('test').innerHTML = this.responseText;
		          }
		        };
			}
		</script>

	</fieldset>

</body>
</html>