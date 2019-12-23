<?php
	session_start();
?>
<?php
	echo "Student ID is: ".$_POST["bal"]."<br>";
	echo "Subject is: ".$_POST['subject'];

	$conn = mysqli_connect('localhost', 'root', '', 'sms');
	$sql1 = "select * from midmarks where studentid='{$_POST["bal"]}' AND subject='{$_POST['subject']}' ";
	$sql2 = "select * from finalmarks where studentid='{$_POST["bal"]}' AND subject='{$_POST['subject']}' ";
	$result1 = mysqli_query($conn, $sql1);
	$result2 = mysqli_query($conn, $sql2);

	?>	
	<table border="1px">
		<tr>
			<td><b>Mid </b></td>
			<td><b>Final </b></td>
			<td><b>Total </b></td>
		</tr>
		
		<?php
			$user1 = mysqli_fetch_assoc($result1);
			$user2 = mysqli_fetch_assoc($result2);
			?><tr><?php
			?><td><?php 
				echo $user1['total']."<br>";   
			?></td><?php
			?><td><?php 
				echo $user2['total']."<br>";   
			?></td><?php
			?><td><?php 
				echo $user1['total']*.4 +$user2['total']*.6 ."<br>";   
			?></td><?php
			?></tr><?php
			
		?>
		

	</table>

	<?php


	
?>