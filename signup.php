<?php 

	$conn=mysqli_connect("localhost","root","","student_connect");

	$email=$_POST['Email'];
	$pass=$_POST['password'];
	$username=$_POST['username'];
	$qry="INSERT INTO `android_user_reg`(`email`, `username`, `password`) VALUES('$email','$username','$pass')";
	if (mysqli_query($conn,$qry)) {
		# code...
		echo "sign up success";
	}
?>