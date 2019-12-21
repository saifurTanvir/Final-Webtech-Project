<!DOCTYPE html> 
<html>
<head>
<title>Note upload</title>
<body>
	<fieldset>
	<legend>Note upload</legend>
	<table >
		<tr>
			<td><b>Select Subject: </b></td>
			<td>
				<select name="subject" id="subject">
			    <option value="">Select Subject</option>
			    <option value="dataStructure">Data Structure</option>
			    <option value="algorithm">Algorithm</option>
			    <option value="cpp">CPP</option>
			  </select>
			</td>
			<td><b style="color: red">*</b><b id="subjectError"></b></td>
		</tr>
		<tr>
			<td><b>Note Title: </b></td>
			<td><input type="text" name="title" id="title"></td>
			<td><b style="color: red">*</b><b id="titleError"></b></td>

		</tr>
		<tr>
			<td><b>Select Note: </b></td>
			<td>
				<input type="file" name="file" id="file">
			</td>
			<td><b style="color: red">*</b><b id="fileError"></b></td>

		</tr>
		<tr>
			<td colspan="2"><input type="button" name="submit" value="Upload" onclick="validation()"></td>
		</tr>
			
		<tr>
			<td><a href="logout.php"><b>Logout</b></a></td>
			<td><a href="../../action/teacher/teacherHome.php"><b>Home</b></a></td>
		</tr>
	</table>
	</fieldset>
	<script type="text/javascript">
		function validation() {
			var count = 0;
			var subject = document.getElementById('subject').value;
			var file = document.getElementById('file').value;

			if(subject == ""){
				var subject = document.getElementById('subjectError').innerHTML = "Can't be empty";
			}
			else{
				count++;
				var subject = document.getElementById('subjectError').innerHTML = "";
			}
			if(title == ""){
				var title = document.getElementById('titleError').innerHTML = "Can't be empty";
			}
			else{
				count++;
				var title = document.getElementById('titleError').innerHTML = "";
			}
			if(file == ""){
				var file = document.getElementById('fileError').innerHTML = "Can't be empty";
			}
			else{
				count++;
				var file = document.getElementById('fileError').innerHTML = "";
				alert(count);
			}
		}
		
	</script>

</body>
</html>