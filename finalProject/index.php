<?php
	if(isset($_GET['idPassMismatch'])){
		echo $_GET['idPassMismatch'];
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>index</title>
</head>
<body>
	<fieldset>
		<legend>SignIn</legend>
		<form method="POST" action="action/teacher/signinCheck.php">
			<table>
				<tr>
					<td><b>Username:</b></td>
					<td><input type="text" name="username"></td>
				</tr>

				<tr>
					<td><b>Password:</b></td>
					<td><input type="Password" name="password"></td>
				</tr>

				<tr>
					<td><input type="submit" name="submit" value="SignIn"></td>
					<td><a href="view/teacher/signup.php">Register</a></td>
				</tr>
			</table>
		</form>
	</fieldset>

</body>
</html>