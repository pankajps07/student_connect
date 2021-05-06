<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
	
			<?php include "top_nav.php"?>;
<div class="container">
	<div class="row">
		<div class="col-md-8">
			<!--Welcome page for admin-->
			<h3> Welcome </h3>

			<a href="Studentdetails.php"> <button type="submit"  class="btn btn-primary">View Students</button></a>

			<a href="viewfaculty.php"><button  href="" type="submit" class="btn btn-primary">View faculty</button></a>
			<a href="placement_officer.php"><button  href="" type="submit" class="btn btn-primary"> Placement Officer</button></a>

			<a href=""><button  href="" type="submit" class="btn btn-primary">All notfication</button></a>


			<a href="logout.php"><button  href="" type="submit" class="btn btn-danger">Logout</button></a>

		</div>
	</div>
	<?php include('../allfoot.php'); ?>

</body>
</html>