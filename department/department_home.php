

<!DOCTYPE  HTML>


<?php include('department_head.php'); ?>
<div class="container">
	<div class="row">
		<div class="col-md-8">
			<!--Welcome page for admin-->
			<h3> Welcome <a href="department_home.php"><?php echo $_SESSION['username']; ?></a></h3>

			<a href="notification_details.php"> <button type="submit"  class="btn btn-primary">Notification Details</button></a>

			<a href="student_details.php"><button  href="" type="submit" class="btn btn-primary">Student Details</button></a>

			<a href="faculty_details.php"><button  href="" type="submit" class="btn btn-primary">Faculty Details</button></a>

		

			<a href="logout.php"><button  href="" type="submit" class="btn btn-danger">Logout</button></a>

		</div>
	</div>
	<?php include('../allfoot.php'); ?>