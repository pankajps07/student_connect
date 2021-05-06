<!DOCTYPE html>
<html>
<head>
	<title>Study Notification</title>
</head>
<body>
	<?php include "navbar.php"; ?>

	<div class="container m-5">
		<p class="h3 text-center text-danger">Study Notification</p>
		<div class="row">
			<?php
				

				$qry="select s.*,f.id as fid,f.name,d.dept_id from subject s,faculty_details f,departments d
						where s.fac_id=f.id
						and s.dept_id=d.dept_id
						and s.sem='$sem'";
				$exc=mysqli_query($conn,$qry);
				echo mysqli_error($conn);
				while ($row=mysqli_fetch_array($exc)) {
					# code...
					$sub_id=$row['id'];
					?>
					
						
					
					<div class="col-lg-4">
						<a href="view_study_notification.php?sub_id=<?php echo $sub_id ?>">
						<div class="card bg-dark text-light">
							<div class="card-header bg-info  h3"><?php echo $row['sub_name'] ?></div>
							<div class="card-body">
								<p></p>
								<p class="" style="font-size: 15px;"><?php echo $row['name']; ?></p>
							</div>
						</div>
						</a>
					</div>
					
					<?php
				}
			 ?>
			
		</div>
	</div>
</body>
</html>