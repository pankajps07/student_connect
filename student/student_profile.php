<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
</head>
<body>
	<?php include "navbar.php"; ?>

	<div class="container m-5">
		<p class="h3  text-danger">Profile</p>
		<div class="col-lg-6">
			<table class="table table-bordered table-stripped">
				<?php
					$qry="select * from student_details where email='$email'";
					$exc=mysqli_query($conn,$qry);
					while ($row=mysqli_fetch_array($exc)) {
						# code...
						$dept_id=$row['dept_id'];
						$qry2="select * from departments where dept_id='$dept_id'";
						$exc2=mysqli_query($conn,$qry2);
						while ($row2=mysqli_fetch_array($exc2)) {
							# code...
							$dept_name=$row2['dept_name'];
						}
						?>

				<tr>
					<th>Name</th>
					<td><?php echo $row['name']; ?></td>
				</tr>
				<tr>
					<th>USN</th>
					<td><?php echo $row['usn']; ?></td>
				</tr>
				<tr>
					<th>Semester</th>
					<td><?php echo $row['sem']; ?></td>
				</tr>
				<tr>
					<th>Email</th>
					<td><?php echo $row['email']; ?></td>
				</tr>
				<tr>
					<th>Department</th>
					<td><?php echo $dept_name; ?></td>
				</tr>
					<?php
					}

				 ?>
			</table>
		</div>
	</div>
</body>
</html>