<!DOCTYPE html>
<html>
<head>
	<title>Notice Upload</title>
</head>
<body> 
<form method="POST" action="#">
	<fieldset>
	<legend>Notice upload</legend>
	
	<table>
	<tr>
		<td><b>Select Subject: </b></td>
		<td>
			<select name="subject">
		    <option value="Demo">Demo</option>
		    <option value="dataStructure">Data Structure</option>
		    <option value="algorithm">Algorithm</option>
		    <option value="cpp">CPP</option>
		  </select>
		</td>
	</tr>
	<tr>
		<td><b>Notice Heading:</b> </td>
		<td><input type="text" name="heading"></td>
	</tr>
	<tr>
		<td><b>Write Notice: </b></td>
		<td>
			<textarea name="description"></textarea>
		</td>
	</tr>
	<tr>
		<td colspan="2"><input type="submit" name="submit" value="Upload"></td>
	</tr>
		
	<tr>
		<td><a href="../../action/teacher/teacherHome.php"><b>Home</b></a></td>
		<td><a href="logout.php"><b>Logout</b></a></td>
	</tr>
	</table>
	</form>
	</fieldset>
</body>
</html>