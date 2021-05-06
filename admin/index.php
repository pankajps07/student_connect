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
	 <?php
	$conn =mysqli_connect("localhost","root","","student_connect") or die("database not connected");

	?>
<div class="container">
		<h1 class="text-danger text-center ">ADMIN LOGIN PAGE</h1>
  <div class="col-lg-6 offset-3">
    <div class="card">
     
      <div class="card-body">
        <form method="post">
          <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" class="form-control" required="">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required="">
          </div>
           <div class="form-group">
            <button class="btn btn-primary" name="submit">Login</button>
          </div>

				</form>
			</div>
		</div>


<?php


      session_start();
       if (isset($_POST['submit'])) {
          $email=$_POST['email'];
          $password=$_POST['password'];
    	
      	  $qry="select * from user where email='admin' AND password='1234' user_type='admin'";
          $exc=mysqli_query($conn,$qry);

            
            if(mysqli_affected_rows($conn)!=0)
            {
              $_SESSION['email']=$email;
              
              echo "<script>alert('login successfull');
              </script>";
              header("location:admin_home.php");
            }
            else
            {
              echo "<script>alert('username/password incorrcet');</script>";
            }
		
	}
	?>
</body>
</html>