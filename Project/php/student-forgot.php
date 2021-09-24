<?php
	$username = $_POST['username'];
	$mblnum = $_POST['mblnum'];
	$email = $_POST['email'];
	$psw = $_POST['psw'];

	//Database connection
	$conn = new mysqli('localhost','root','marrks management');
	if($conn->connect_error){
		die('Connection Failed :'.$conn->connect_error);
	}else{
		$stmt = $conn->prepare("insert into student-forgot(username, mblnum, email, psw)
			value(?,?,?,?)");
		$stmt->bind_param("siss",$username, $mblnum, $email, $psw);
		$stml->execute();
		echo "forgot successfully..";
		$stml->close();
		$conn->close();

	}
	
?>