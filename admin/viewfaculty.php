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
	
	<?php include "top_nav.php"?>
 
		<div class="container">
			<div class="table tableistripped">
				<center><h1 class="text-danger">FACULTY DEATILS</h1></center>
  
      <div class="col-lg-6">
      	<form method="post">
      		<div class="form-group">
      			<label>Select Department</label>
      			<select name="dept_name" class="form-control ">
								
									<?php
								
									$qry="select * from departments";
									$exc=mysqli_query($conn,$qry);
									while($row=mysqli_fetch_array($exc))
									 {
									 ?>
									 	<option><?php echo $row['dept_name'];?></option>
									 
								 	<?php
								 }
						?>		
					</select>
      		</div>
      		<div class="form-group">
      			<button class="btn btn-success" name="view">View</button>
      		</div>
      		
      	</form>
      	</table>
      </div>
      <?php 
      	if (isset($_POST['view'])) {
      		$dept_name=$_POST['dept_name'];
      		?>
      			<table class="table table-bordered text-center">
      				<thead class="thead-dark ">
					<tr>

					<th>faculty id</th>
					<th>name</th>
					<th>Email</th>
					
					<th>Edit</th>
					<th>Deletet</th>
				</tr>
			</thead>
				<?php
					
					$qry="select * from departments where `dept_name`='$dept_name'";
					$exc=mysqli_query($conn,$qry);
					
					while ($row=mysqli_fetch_array($exc))
					
					 {
					 	$qry="select * from faculty_details ";
					$exc=mysqli_query($conn,$qry);
					
					while ($row=mysqli_fetch_array($exc))
					
					 {

				?>
					<tr>
						 <td><?php  echo $faculty_id=$row['faculty_id'];?></td>
						 <td><?php  echo $row['name'];?></td>
						 <td><?php  echo $row['email'];?></td>
							 	
						<td><a href="update_faculty.php?faculty_id=<?php echo $faculty_id;?>" class="btn btn-primary">Edit</a></td>
						<td><a href="delete_faculty.php?faculty_id=<?php echo $faculty_id;?>" class="btn btn-danger" onclick="return confirm('do you want to delete...?');">Delete</a></td>
					</tr>
						<?php
					
					}
				}
			 ?>

			</table>



      		<?php 
      		# code...
      	}
      ?>
    
      	
      
		</div>
	


</body>
</html>
	<?php include('allfoot.php'); ?>