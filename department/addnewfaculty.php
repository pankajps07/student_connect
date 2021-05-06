
<?php include('department_head.php'); ?>

<div class="container">
	<div class="row">
		<div class="col-md-4">
			<h3> Welcome <a href="department_home.php"><?php echo $_SESSION['username']; ?></a></h3>
			<h4 class="page-header">Add New Faculty </h4>
			
			<form action="" method="POST" name="update">


				<div class="form-group">
					<label for="Faculty Name">Faculty Name : <span style="color: #ff0000;">*</span></label>
					<input type="text" name="name" class="form-control" id="name" required>
				</div>

				<div class="form-group">
					<label for="faculty_id">Faculty Id: <span style="color: #ff0000;">*</span></label>
					<input type="text" name="faculty_id" class="form-control" id="faculty_id" required>
				</div>

				<div class="form-group">
					<label for="email">Email : <span style="color: #ff0000;">*</span></label>
					<input type="email" class="form-control" id="email" name="email" maxlength="" required>
				</div>



				<div class="form-group">
					<label for="Password">Password :<span style="color: #ff0000;">*</span></label>
					<input type="text" class="form-control" name="pass" required id="pass">
				</div>

				<div class="form-group">
					<input type="submit" value="Add New Faculty" name="addnewfaculty" class="btn btn-primary">
				</div>

			</form>
			<?php
			//}
			?>

			<?php
			if ( isset( $_POST[ 'addnewfaculty' ] ) ) {
				$name = $_POST[ 'name' ];
				$faculty_id=$_POST['faculty_id'];
				$email=$_POST['email'];
				$pass = $_POST['pass'];

				// adding new faculty
				$sql2="INSERT INTO `users`(`email`, `password`, `user_type`) VALUES('$email','$pass','faculty')";
				$exc2=mysqli_query($conn,$sql2);

				$sql = "INSERT INTO `faculty_details`(`faculty_id`, `name`, `email`, `dept_id`) VALUES('$faculty_id','$name','$email','$dept_id')";

				if ( mysqli_query( $conn, $sql ) ) {

					echo "<script>alert('faculty added..');
						window.location='faculty_details.php';
					</script>";

				} else {
					//error message if SQL query Fails
					echo "<br><Strong>New Faculty Adding Faliure. Try Again</strong><br> Error Details: " . $sql . "<br>" . mysqli_error( $conn);
				}
				//close the connection
				mysqli_close( $conn );

			}


			?>
		</div>
	</div>

	<?php include('../allfoot.php'); ?>