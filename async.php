<?php

session_start();
// $conn = mysqli_connect("192.168.43.125","root","","signup");
	
$conn = mysqli_connect("localhost","root","","signup");

	if(!$conn){
		die("connection failed". mysqli_connect_error());
    }
    
// $conn1 = mysqli_connect("192.168.1.102","root","","signup");

// 	if(!$conn1){
// 		die("connection failed". mysqli_connect_error());
//     }

    
// $sqlname = mysqli_query($conn,"SELECT name FROM users1");
// $sqluid= mysqli_query($conn,"SELECT uid FROM users1");
// $sqlpwd = mysqli_query($conn,"SELECT pwd FROM users1");
// $sqlcity = mysqli_query($conn,"SELECT city FROM users1");
// $sql1 = "INSERT INTO users (name,uid,pwd,city) VALUES ('$sqlname','$sqluid','$sqlpwd','$sqlcity')";
$sql = "INSERT INTO users2 SELECT * FROM users1";
$result = mysqli_query($conn,$sql);
$sql1 = "DELETE FROM users1";
$result1 = mysqli_query($conn,$sql1);
?>