<?php
	session_start();
	 
	 include 's2.php';
	// $db = mysqli_connect('localhost','usama','pokerface','registration'); 
	
		$username =$_POST['username'];
		$email = $_POST['email'];
		$comments = $_POST['comments'];
			
		$sql = "INSERT INTO reviews (username,email,comments) VALUES ('$username','$email','$comments')";
			$result = mysqli_query($conn,$sql);
		
		header("Location: index1.php");
		
?>