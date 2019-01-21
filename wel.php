<?php
	session_start();
	 
	 include 'reservation-connection.php';
	// $db = mysqli_connect('localhost','usama','pokerface','registration'); 
	
		$time =$_POST['time'];
		$date = $_POST['date'];
		$people = $_POST['people'];
			
		$sql = "INSERT INTO reservations (time,date,people) VALUES ('$time','$date','$people')";
			$result = mysqli_query($conn,$sql);
		
		header("Location: index1.php");
		
?>