<?php
// 	$firstName = $_POST['firstName'];
	
// 	$con = new mysqli('localhost','root','','test');

// 	if($con->conncect_error){
// 		die('connection failed : '.$con->connect_error);
// 	}else{
// 		$stmt = $con->prepare("insert into form(name) values(?)");
// 		$stmt->bind_param("s",$firstName);
// 		$stmt->execute();
// 		echo "successful..";
// 		$stmt->close();
// 		$con->close();
// }
    echo "hello working";
?>