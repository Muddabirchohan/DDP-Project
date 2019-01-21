<?php
	session_start();
	 
	 include 'order-place-connection.php';

	// $db = mysqli_connect('localhost','usama','pokerface','registration'); 

	

		$name =$_POST['name'];
		$area = $_POST['area'];
		$quantity = $_POST['quantity'];
         $dpl=$_POST['dpl'];
         $mobile=$_POST['mobile'];
         $email=$_POST['email'];
        
		
         $sql = "INSERT INTO orders (name,area,quantity,dpl,mobile,email) VALUES ('$name','$area','$quantity','$dpl','$mobile','$email')";
         $result = mysqli_query($conn,$sql);
	
	
		

		 header("Location: submit-one.php");
		



?>