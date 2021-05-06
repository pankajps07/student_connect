<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
</head>
<body>
	<?php include "navbar.php"; ?>

	<div class="containe-fluid ">
		<div class="row">
			<div class="col-lg-3">
				<a href="study_notification.php">
					<div class="card m-5 bg-success text-white">
						<div class="card-header ">Study</div>
					</div>
				</a>
			</div>
			<div class="col-lg-3">
				
				<a href="webinar_notification.php">
					<div class="card m-5 bg-primary text-white">
						<div class="card-header">Webinars</div>
					</div>
				</a>
			</div>
			
			<div class="col-lg-3">
				<a href="certification_notification.php">
					<div class="card m-5 bg-dark text-white">
						<div class="card-header ">Certification Course</div>
					</div>
				</a>
			</div>
			 <?php
            if($sem>4){
              ?>
              <div class="col-lg-3">
				<a href="placement_notification.php">
					<div class="card m-5 bg-info text-white">
						<div class="card-header ">Placements</div>
					</div>
				</a>
			</div>
              <?php
            }
           ?>
		</div>
		<div class="container bg-light">
			<p class="text-danger h2 text-center">Notifications</p>
			<div class="row ">
			<?php 
					$qry="select * from notification where sem='$sem' and dept_id='$dept_id'";
					$exc=mysqli_query($conn,$qry);
					while ($row=mysqli_fetch_array($exc)) {
						$faculty_id=$row['faculty_id'];
						$faculty_qry="select * from faculty_details where id='$faculty_id'";
						$faculty_exc=mysqli_query($conn,$faculty_qry);
						while ($row2=mysqli_fetch_array($faculty_exc)) {
							$faculty_name=$row2['name'];
						}
						?>
			<div class="col-lg-6">
				
					
				<div class="card  mb-3">
					<div class="card-header">
						<?php echo $row['notification_type']; ?>
					</div>
					<div class="card-body">
						<p class="card-text text-warning"><?php echo $row['day'] ?></p>
						<p class="card-text text-primary"><?php echo $row['notification_content'] ?></p>
						
						<p class="card-text text-danger  float-lg-right">-<?php echo $faculty_name; ?></p>
					</div>
				</div>
				
			</div>
			<?php
				}
				?>
		</div>
		</div>
		
	</div>
</body>
</html>