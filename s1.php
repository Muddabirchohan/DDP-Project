<?php
	session_start();
	 
	 include 's2.php';

	// $db = mysqli_connect('localhost','usama','pokerface','registration'); 

	

		$name =$_POST['name'];
		$uid = $_POST['uid'];
		$pwd = $_POST['pwd'];
		 $city=$_POST['city'];
		if($city === 'karachi')
		{
			$conn1 = mysqli_connect("192.168.1.102","root","","signup");
			$sql1 = "INSERT INTO users (name,uid,pwd,city) VALUES ('$name','$uid','$pwd','$city')";
			$sql2 = "INSERT INTO users1 (name,uid,pwd,city) VALUES ('$name','$uid','$pwd','$city')";
			$result = mysqli_query($conn,$sql1);
			$result = mysqli_query($conn,$sql2);

		}
	
		

		 header("Location: index.php");
		



?>