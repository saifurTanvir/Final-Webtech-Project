<!DOCTYPE html>
<html>
<head>
	<title>settings</title>
</head>
<body>
	<fieldset>
	<legend>Settings</legend>
	<form>
		<table border="1px">
			<tr>
				<td colspan="3" align="center"><b>Update Info</b></td>
			</tr>
			<tr>
				<td><b>Current Password:</b></td>
				<td><input type="Password" name="currentPassword" id="currentPassword"></td>
				<td><b style="color: red">*</b><b id="currentPasswordError"></b></td>
			</tr>

			<tr>
				<td><b>New Password:</b></td>
				<td><input type="Password" name="newPassword" id="newPassword"></td>
				<td><b style="color: red">*</b><b id="newPasswordError"></b></td>
			</tr>

			<tr>
				<td><b>Confirm New Password:</b></td>
				<td><input type="Password" name="confirmPassword" id="confirmPassword"></td>
				<td><b style="color: red">*</b><b id="confirmPasswordError"></b></td>
			</tr>

			<tr>
				<td><input type="button" name="submit" value="submit" onclick="validation()"></td>
				<td align="right"><a href="../../action/teacher/teacherHome.php"><b>Home</b></a></td>
			</tr>
		</table>
	</form>
	</fieldset>
	<script type="text/javascript">
	function validation() {		

		var count = 0;
		var currentPassword = document.getElementById('currentPassword').value;
		var newPassword = document.getElementById('newPassword').value;
		var confirmPassword = document.getElementById('confirmPassword').value;

		if(currentPassword == ""){
			document.getElementById("currentPasswordError").innerHTML = "Can't be null";
		}
		else{
			document.getElementById("currentPasswordError").innerHTML = "";
			count++;
		}
		if(newPassword == ""){
			document.getElementById("newPasswordError").innerHTML = "Can't be null";
		}
		else{
			document.getElementById("newPasswordError").innerHTML = "";
			count++;
		}
		if(confirmPassword == ""){
			document.getElementById("confirmPasswordError").innerHTML = "Can't be null";
		}
		else{
			document.getElementById("confirmPasswordError").innerHTML = "";
			count++;
			//alert(count);
		}	
		if(count == 3){
			var toSend = {
				currentPassword: currentPassword,
				newPassword: newPassword,
				confirmPassword: confirmPassword 
			};
			var jsonString = JSON.stringify(toSend);
			//alert(jsonString);
			
			var xhttp = new XMLHttpRequest();
			xhttp.open("POST", "../../action/teacher/settingsAction.php", true);
			xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
			//1.3-string send to php
			xhttp.send("data="+jsonString);

			xhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
				 	alert(this.responseText);
				 	//document.getElementById('data').innerHTML = this.responseText;
				}
			};	
		}

	}
	</script>

</body>
</html>