<?php
	 
	$conn =mysqli_connect("localhost","root","","student_connect") or die("database not connected");



	$faculty_id=$_GET['faculty_id'];
			
	$qry="DELETE FROM `faculty_details` WHERE `faculty_id`='$faculty_id'";
	$exe=mysqli_query($conn,$qry);
	if ($exe)
	 {
		echo "<script> alert('data deleted');
			window.location='viewfaculty.php';
		</script>";
		
	}
	

?>