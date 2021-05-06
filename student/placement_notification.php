<!DOCTYPE html>
<html>
<head>
	<title>Placement Notification</title>
</head>
<body>
	<?php include "navbar.php"; ?>

	<div class="container m-5">
		<p class="h3 text-center text-danger">Placement Notification</p>
		<div class="col-lg-10 offset-1">
			<table class="table table-bordered table-stripped">
				<thead class="bg-info text-white">
					<tr>
						<th>Faculty Name</th>
						<th>Notification Content</th>
						<th>Posted Date & Time</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						$qry="select * from notification where notification_type='Placement' and dept_id='$dept_id' and sem='$sem'";
						$exc=mysqli_query($conn,$qry);
						
						while ($row=mysqli_fetch_array($exc)) {
							# code...
							$faculty_id=$row['faculty_id'];
							$fac_qry="select * from faculty_details where id='$faculty_id'";
							$fac_exc=mysqli_query($conn,$fac_qry);
							while ($row2=mysqli_fetch_array($fac_exc)) {
								# code...
								$fac_name=$row2['name'];
							}
							?>
							<tr>
								<td><?php echo $fac_name; ?></td>
								<td><?php echo $row['notification_content']; ?></td>
								<td><?php echo $row['day']; ?></td>
							
							</tr>
							<?php
						}
					?>
					
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>