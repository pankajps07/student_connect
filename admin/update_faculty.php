<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	
</head>
<body>
	


		<?php include "top_nav.php"?>;
		<div class="container">
			<div class="table ">
				<center><h1 class="text-danger">UPDATE FACULTY</h1></center>
  
      
     	<?php
     
     	 	$faculty_id=$_GET['faculty_id'];
			$qry="select * from faculty_details where faculty_id='$faculty_id' ";
			$exc=mysqli_query($conn,$qry);
			while ($row=mysqli_fetch_array($exc)) {
		?>
			<form method="post" action="">
				<div class="form-group">
					<label>Faculty Id</label>
					<input type="text" class="form-control" name="faculty_id" value="<?php echo $row['faculty_id'];?>" required="">
				</div>
				<div class="form-group">
					<label>faculty name</label>
					<input type="text" class="form-control" name="name" value="<?php echo $row['name'];?>"  required="">
				</div>
				
				<div class="form-group">
					<label>Email</label>
					<input type="text" class="form-control" name="email" value="<?php echo $row['email'];?>"  required="">
				</div>
				
				<div class="form-group">
					<button class="btn btn-dark" name="update">Update</button>
				</div>
		</form>
			<?php } 
			?>
			<?php 

			if (isset($_POST['update']))
			 {
				$faculty_id=$_GET['faculty_id'];

				$name=$_POST['name'];

				$email=$_POST['email'];

				
				$sql="UPDATE `faculty_datails` SET `name`='$name',`email`='$email' WHERE faculty_id='$faculty_id'";
				$exc=mysqli_query($conn,$sql);
				if($exc==true){
						echo "<script>alert('data updated successfully');
							window.location='viewfaculty.php';
						</script>";
					}
					else {
							echo "<script>alert('error');
							window.location='viewfaculty.php';
						</script>"; # code...
						}	
				}
			?>
		</div>
		</div>
	</body>
</html>
<?php include('allfoot.php'); ?>