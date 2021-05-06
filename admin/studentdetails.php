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

	 <?php
	$conn =mysqli_connect("localhost","root","","student_connect") or die("database not connected");

	?>

		<?php include "top_nav.php"?>;
			<div class="container">
				<div class="table table-bordered table-center shadow">
					<center><h1 class="text-danger">STUDENT DETAILS</h1></center>

     	 <div class="col-lg-6">
     	 	<form method="post">
      		
      			<div class="form-group">
      			
					<label>departments</label>

					<select name="dept_id" class="form-control ">
								
							<?php 
                              $qry="select * from departments";
                              $exc=mysqli_query($conn,$qry);
                              while ($row=mysqli_fetch_array($exc)) {
                                $deptid=$row['dept_id'];
                                ?>
                                <option value="<?php echo $deptid ?>"><?php echo $row['dept_name']; ?></option>
                                <?php
                              }
                            ?>
						?>		
					</select>
					
					<label>Select sem</label>
      					<select id="dept" name="sem" class="form-control" required>
                            <option value="#" disabled="" selected>Select Semester</option>
                            <?php
                            	for($i=1;$i<=8;$i++)
                            	{
                            ?>
                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php
                            	}
                             ?>
                            
                            </select>

      		</div>
      		<div class="form-group">
      			<button class="btn btn-success" name="view">View</button>
      		</div>
      		
      	</form>
      </div>
      <?php 
      	if (isset($_POST['view'])) {
      		
      		$sem=$_POST['sem'];
      		$dept_id=$_POST['dept_id'];

      		?>
      			<table class="table table-bordered text-center" >
      			<thead class="thead-dark">
			
				<tr>
					<th>usn</th>
					<th>name</th>
					<th>sem</th>
					<th>email</th>
				
				</tr>
				</thead>
				<?php
					
					$qry="select * from student_details where  sem='$sem' and dept_id='$dept_id' ";
					$exc=mysqli_query($conn,$qry);
					
					while ($row=mysqli_fetch_array($exc))
					 {

				?>
						<tr>
						
							<td><?php  echo $row['usn'];?></td>
							<td><?php  echo $row['name'];?></td>
							<td><?php  echo $row['sem'];?></td>
							<td><?php  echo $row['email'];?></td>
							
	
						</tr>
						<?php
					
					}
			 ?>

			</table>

      		<?php 
      		# code...
      	}
      ?>
    
      	</div>
      
		</div>

</body>
</html>
<?php include('allfoot.php'); ?>