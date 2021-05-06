<!DOCTYPE html>
<html>
<head>
	<title>placement officer</title>
	
</head>
<body>

	

		<?php include "top_nav.php"?>;
			
					<center><h1 class="text-danger">Placement Officer Details</h1></center>

	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<form method="post">
					<div class="form-group">
						<label>Name</label>
						<input type="text" name="name" placeholder="enter name" class="form-control" required="">
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" name="email" placeholder="enter email" class="form-control" required="">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" placeholder="enter password" class="form-control" required="">
					</div>
					<div class="form-group">
						<button class="btn btn-success" name="add">Add</button>
					</div>
				</form>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-8">
				<table class="table table-bordered">
					<tr>
						<th>Name</th>
						<th>Email</th>
						
					</tr>
					<?php 
					$qry="select * from placement_officer";
					$exc=mysqli_query($conn,$qry);
					while ($row=mysqli_fetch_array($exc)) {
						# code...
						?>
						<tr>
							<td><?php echo $row['name']; ?></td>
							<td><?php echo $row['email']; ?></td>
						</tr>
						<?php
					}
					?>
					
				</table>
			</div>
		</div>
	</div>
<?php 
	if (isset($_POST['add'])) {
		$name=$_POST['name'];
		$email=$_POST['email'];
		$password=$_POST['password'];

		$qry2="INSERT INTO `users`(`email`, `password`, `user_type`) VALUES ('$email','$password','placement_officer')";
		$exc2=mysqli_query($conn,$qry2);
		$qry1="INSERT INTO `placement_officer`(`name`, `email`) VALUES('$name','$email')";
		$exc1=mysqli_query($conn,$qry1);	

		echo "<script>location=location</script>";


	}
?>
     	

</body>
</html>
<?php include('allfoot.php'); ?>