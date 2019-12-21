<!DOCTYPE html>
<html>
<head>
	<title>signup</title>
	<!--<script type="text/javascript" src="../../action/teacher/signupValidation.js"></script>-->

	
</head>
<body>
	<fieldset>
		<legend>Signup</legend>
		<form method="POST" action="#">
		<table>
			<tr>
				<td><b>Username:</b></td>
				<td><input type="text" name="username" id="username"></td>
				<td><b style="color: red">*</b><b id="usernameError"></b></td>
			</tr>

			<tr>
				<td><b>Bsc major:</b></td>
				<td><input type="text" name="bscMajor" id="bscMajor"></td>
				<td><b style="color: red">*</b><b id="bscMajorError"></b></td>
			</tr>
			<tr>
				<td><b>Msc major:</b></td>
				<td><input type="text" name="mscMajor" id="mscMajor"></td>
				<td><b style="color: red">*</b><b id="mscMajorError"></b></td>
			</tr>
			<tr>
				<td><b>Research Topic:</b></td>
				<td><input type="text" name="researchTopic" id="researchTopic"></td>
				<td><b style="color: red">*</b><b id="researchTopicError"></b></td>
			</tr>
			<tr>
				<td><b>Address:</b></td>
				<td><input type="text" name="address" id="address"></td>
				<td><b style="color: red">*</b><b id="addressError"></b></td>
			</tr>
			<tr>
				<td><b>Email:</b></td>
				<td><input type="text" name="email" id="email"></td>
				<td><b style="color: red">*</b><b id="emailError"></b></td>
			</tr>
			<tr>
				<td><b>Phone:</b></td>
				<td><input type="text" name="phone" id="phone"></td>
				<td><b style="color: red">*</b><b id="phoneError"></b></td>
			</tr> 
			<tr>
				<td><b>Password:</b></td>
				<td><input type="Password" name="password" id="password"></td>
				<td><b style="color: red">*</b><b id="passwordError"></b></td>
			</tr>
			
			<tr>
				<td><b>Confirm Password:</b></td>
				<td><input type="Password" name="confirmPassword" id="confirmPassword"></td>
				<td><b style="color: red">*</b><b id="confirmPasswordError"></b></td>
			</tr>
			<tr>
					<td><b>User type:</b></td>
					<td>
						<input type="radio" name="type" value="admin" id="admin" /> <b>Admin</b>
						<input type="radio" name="type" value="student" id="student" /> <b>Student<b>
						<input type="radio" name="type" value="teacher" id="teacher" /> <b>Teacher</b></b>
						
					</td>
					<td><b style="color: red">*</b><b id="typeError"></b></td>
			</tr>

			<tr>
				<td><input type="button" name="submit" value="Signup" onclick="validation()"></td>
				<td><a href="../../index.php">Signin</a></td>
			</tr>
		</table>
	</form>

	<script type="text/javascript">
		
 function validation() {
 	var count = 0;
 	var username = document.getElementById('username').value;
 	if(username == ""){
 		document.getElementById('usernameError').innerHTML = "Name Requied";
 		//alert("Okay");
 	}
 	else{
 		count++;
 		document.getElementById('usernameError').innerHTML = " ";
 	}

 	var bscMajor = document.getElementById('bscMajor').value;
 	if(bscMajor == ""){
 		document.getElementById('bscMajorError').innerHTML = "Can't be empty";
 		//alert("Okay");
 	}
 	else{
 		count++;
 		document.getElementById('bscMajorError').innerHTML = " ";
 	}

 	var mscMajor = document.getElementById('mscMajor').value;
 	if(mscMajor == ""){
 		document.getElementById('mscMajorError').innerHTML = "Can't be empty";
 		//alert("Okay");
 	}
 	else{
 		count++;
 		document.getElementById('mscMajorError').innerHTML = " ";
 	}

 	var researchTopic = document.getElementById('researchTopic').value;
 	if(researchTopic == ""){
 		document.getElementById('researchTopicError').innerHTML = "Can't be empty";
 		//alert("Okay");
 	}
 	else{
 		count++;
 		document.getElementById('researchTopicError').innerHTML = " ";
 	}

 	var address = document.getElementById('address').value;
 	if(address == ""){
 		document.getElementById('addressError').innerHTML = "Can't be empty";
 		//alert("Okay");
 	}
 	else{
 		count++;
 		document.getElementById('addressError').innerHTML = " ";
 	}

 	var email = document.getElementById('email').value;
 	if(email == ""){
 		document.getElementById('emailError').innerHTML = "Can't be empty";
 		//alert("Okay");
 	}
 	else{
 		count++;
 		document.getElementById('emailError').innerHTML = " ";
 	}

 	var phone = document.getElementById('phone').value;
 	if(phone == ""){
 		document.getElementById('phoneError').innerHTML = "Can't be empty";
 		//alert("Okay");
 	}
 	else{
 		count++;
 		document.getElementById('phoneError').innerHTML = " ";
 	}

 	var password = document.getElementById('password').value;
 	if(password == ""){
 		document.getElementById('passwordError').innerHTML = "Can't be empty";
 		//alert("Okay");
 	}
 	else{
 		count++;
 		document.getElementById('passwordError').innerHTML = " ";
 	}

 	var confirmPassword = document.getElementById('confirmPassword').value;
 	if(confirmPassword == ""){
 		document.getElementById('confirmPasswordError').innerHTML = "Can't be empty";
 		//alert("Okay");
 	}
 	else{
 		count++;
 		document.getElementById('confirmPasswordError').innerHTML = " ";
 	}

 	var student = document.getElementById('student').checked;
 	var teacher = document.getElementById('teacher').checked;
 	var admin = document.getElementById('admin').checked;
 	

 	if((student == "") && (teacher == "") && (admin == "")){
 		document.getElementById('typeError').innerHTML = "One should select";
 		//alert("Okay");
 	}
 	else{
 		count++;
 		if(student != "")
 			var type = document.getElementById('student').value;
 		else if(teacher != "")
 			var type = document.getElementById('teacher').value;
 		else if(admin != "")
 			var type = document.getElementById('admin').value;

 		document.getElementById('typeError').innerHTML = "";
 		//alert(count);
 	}
// username bscMajor  researchTopic address email  phone password confirmPassword
 	if(count == 10){
 		var toSend = {
		username: username,
		bscMajor: bscMajor,
		mscMajor: mscMajor,
		researchTopic: researchTopic,
		address: address,
		email: email,
		phone: phone,
		password: password,
		confirmPassword: confirmPassword,
		type: type
		};
		var jsonString = JSON.stringify(toSend);
		//alert(jsonString);
		
		var xhttp = new XMLHttpRequest();
		xhttp.open("POST", "../../action/teacher/signupExecute.php", true);
		xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
		//1.3-string send to php
		xhttp.send("bal="+jsonString);
	
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