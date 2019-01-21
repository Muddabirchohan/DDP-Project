<?php
	session_start();
	 
	 include 'booked-connection.php';
	// $db = mysqli_connect('localhost','usama','pokerface','registration'); 
	
		$time =$_POST['time'];
		$date = $_POST['date'];
		$people = $_POST['people'];
			
		$sql = "INSERT INTO booked (time,date,people) VALUES ('$time','$date','$people')";
			$result = mysqli_query($conn,$sql);
		
		header("Location: index1.html");
		
?>