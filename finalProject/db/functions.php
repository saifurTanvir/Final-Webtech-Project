<?php
	//session_start();
	require_once('db.php');

	function register($data){
		$conn = getConnection();
		$sql1 = "insert into users values('', '{$data->username}','{$data->password}', '{$data->type}')";
		$sql2 = "insert into regteacher values('', '{$data->username}','{$data->bscMajor}', '{$data->mscMajor}','{$data->researchTopic}','{$data->address}','{$data->email}','{$data->phone}','{$data->password}','{$data->type}')";
		if(mysqli_query($conn, $sql1) && mysqli_query($conn, $sql2)){
			return true;
		}else{
			return false;
		}

	}

	function validate($username, $password){
		$conn = getConnection();
		$sql = "select * from users where username='{$username}' and password='{$password}'";
		$result = mysqli_query($conn, $sql);
		$user = mysqli_fetch_assoc($result);
		//echo $user['username']." ".$user['password'];

		return count($user);
	}
// username bscMajor  researchTopic address email  phone password confirmPassword

	function changePassword($data){
		$conn = getConnection();
		$sql1 = "update users set password='{$data->newPassword}' where username='{$_SESSION['id']}'";
		$sql2 = "update regteacher set password='{$data->newPassword}' where username='{$_SESSION['id']}'";
		if(mysqli_query($conn, $sql1) && mysqli_query($conn, $sql2)){
			return true;
		}else{
			return false;
		}
	}
	

	
?>