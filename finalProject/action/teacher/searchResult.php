<?php
	session_start();
?>
<h1>Hello, This is Search Result Page!</h1>
<?php
	echo $_POST["bal"];

	$conn = mysqli_connect('localhost', 'root', '', 'sms');
	$sql = "select * from midmarks where studentid='{$_POST["bal"]}' ";
	$result = mysqli_query($conn, $sql);

	?>	
	<table>
		<tr>
			<td><b>Mid Marks: </b></td>
		</tr>
		<?php
			while ($user = mysqli_fetch_assoc($result)) {
				?><tr><?php
				?><td><?php 
					echo "Mid Total Marks: ".$user['term']."<br>";   
				?></td><?php
				?></tr><?php
			}
		?>
		
	</table>

	<?php


	
?>