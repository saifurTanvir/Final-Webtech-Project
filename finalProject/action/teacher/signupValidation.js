
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
 		alert("Hi Tanvir!");
 		var toSend = {
		username: username,
		bscMajor: bscMajor,
		mscMajor: mscMajor,
		researchTopic: researchTopic,
		address: address,
		email: email,
		phone: phone,
		password: password,
		type: type
		};
		var jsonString = JSON.stringify(toSend);
		alert(jsonString);
		
		var xhttp = new XMLHttpRequest();
		xhttp.open("POST", "signupExecute.php", true);
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
 
