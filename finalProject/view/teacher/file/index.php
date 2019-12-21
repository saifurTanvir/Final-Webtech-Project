<?php 
	if(isset($_GET['error'])){
		echo $_GET['error'];
	}
?>
<!DOCTYPE html> 
<html>
<head>
	<title>note upload</title>
</head>
<body>
	<fieldset>
	<legend>Note Upload</legend>
	<form method="POST" action="upload.php" enctype="multipart/form-data">
		<table border="1px solid gray">
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
			</tr>
			<tr>
				<td><b>Select File: </b></td>
				<td><input type="file" name="file"></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="submit" value="submit"></td>
			</tr>
		</table>	
		</fieldset>	
	</form>
</body>
</html>

<?php
$files = scandir("uploads");
?>
<fieldset>
<legend>Note Download Delete</legend>
<?php
for ($a = 2; $a < count($files); $a++)
{
    ?>
        <?php echo $files[$a]; ?>
        
        <table border="1px solid gray">
        	<tr>
        		<td><a href="uploads/<?php echo $files[$a]; ?>" download="<?php echo $files[$a]; ?>">Download</a> 
			    </td>
			    <td><a href="delete.php?name=uploads/<?php echo $files[$a]; ?>" style="color: red;">Delete</a>
		    	</td>
        	</tr>
        </table>
        
    <?php
}
?>
</fieldset>
<td><a href="../../../action/teacher/teacherHome.php"><b>Home</b></a></td>