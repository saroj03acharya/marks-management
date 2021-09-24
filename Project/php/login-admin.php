<?php
	$uname = $_POST['uname'];
	$psw = $_POST['psw'];

	// Database connection
	$conn = new mysqli('localhost','root','test');
	if($conn->connect_error){
		die('Connection Failed :'.$conn->connect_error);
	}else{
		$stmt = $conn->prepare("insert into login(uname,psw)
			value(?,?)");
		$stmt->bind_param("ss",$uname, $psw);
		$stml->execute();
		echo "forgot-student successfully..";
		$stml->close();
		$conn->close();

	}
	}
	
?>