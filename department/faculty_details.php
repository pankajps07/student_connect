
<?php include('department_head.php'); ?>

<div class="container">
	<div class="row">
		<?php
		
		if ( isset( $_REQUEST[ 'deleteid' ] ) ) {
			
			$deleteid = $_GET[ 'deleteid' ];
			//delete faculty Query
			$sql = "DELETE FROM `facutlytable` WHERE FID = $deleteid";

			if ( mysqli_query( $connect, $sql ) ) {
				echo "

					<br><br>
					<div class='alert alert-success fade in'>
					<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
					<strong>Success!</strong> Faculty Details has been deleted.
					</div>";
			} else {
				//error message if SQL query fails
				echo "<br><Strong>Faculty Details Updation Faliure. Try Again</strong><br> Error Details: " . $sql . "<br>" . mysqli_error( $connect );
			}
			//close the connection
			mysqli_close( $connect );
		}
		?>
	</div>


	<div class="row">
		<div class="col-md-8">
			<h3> Welcome <a href="department_home.php"><?php echo $_SESSION['username']; ?></a></h3>
			<h3 class='page-header' >Facutly Details</h3>
			<table class="table table-striped">
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Email</th>
					<th>Password</th>
				</tr>
				<?php 
					$qry="select * from faculty_details where dept_id='$dept_id'";
					$exc=mysqli_query($conn,$qry);
					while ($row=mysqli_fetch_array($exc)) {
						$email=$row['email'];
						$pwd_qry="select * from users where email='$email'";
						$pwd_exc=mysqli_query($conn,$pwd_qry);
						while ($row2=mysqli_fetch_array($pwd_exc)) {
							# code...
							$pass=$row2['password'];
						}
						?>
						<tr>
							<td><?php echo $row['faculty_id']; ?></td>
							<td><?php echo $row['name']; ?></td>
							<td><?php echo $row['email']; ?></td>
							<td><?php echo $pass; ?></td>

							<td>
								<a href="updatefaculty.php?fid=<?php echo $row['id']; ?>"><input type="button" Value="Edit" class="btn btn-info btn-sm"></a>
							</td>
							<td>
								<a href="faculty_details.php?deleteid=<?php echo $row['id']; ?>"><input type="button" Value="Delete" class="btn btn-danger btn-sm"></a>
							</td>
						</tr>

						<?php
					}
				?>
			</table>
			

			<a href="addnewfaculty.php"><button type="button" value="Add New Faculty" class="btn btn-info btn-sm">Add New Faculty</button></a>

		</div>
	</div>

	<?php include('../allfoot.php'); ?>