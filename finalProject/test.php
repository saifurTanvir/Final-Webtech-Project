<?php
	if(isset($_POST['submit'])){
		$value = $_POST['gander'];
		if($value == ""){
			echo "Gander is null";
		}
		//echo $value;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="#">
		<select name="gander">
			<option value=""> Demo</option>
			<option value="M"> Male</option>
			<option value="O">Female</option>
			<option value="F">Other</option>
		</select>
		<input type="submit" name="submit" value="submit">
	</form>


</body>
</html>