<?php include('allhead.php'); ?>
<div class="container">
	<div class="row">
		<div class="col-md-5">
			<!-- Stdeunt login page -->
			<fieldset>
				<legend>
					<h3 style="padding-top: 25px;"><span class="glyphicon glyphicon-lock"></span>&nbsp;  Student Login</h3>
				</legend>
				<form name="studentlogin" action="" method="POST">
					<div class="control-group form-group">
						<div class="controls">
							<label>Email Id:</label>
							<input type="text" class="form-control" name="email" required>
							<p class="help-block"></p>
						</div>
					</div>
					<div class="control-group form-group">
						<div class="controls">
							<label>Passsword:</label>
							<input type="password" class="form-control" name="pass" required>
							<p class="help-block"></p>
						</div>
					</div>
					<center>
						<button type="submit" name="login" class="btn btn-primary">Login</button>
						<button type="reset" class="btn btn-primary" style="
background-color: #E52727;
border-color: #D21B1B;">Reset</button>
					</center>
			</fieldset>
			</form>
			<?php 

				if (isset($_POST['login'])) {
					$email=$_POST['email'];
					$pass=$_POST['pass'];
					session_start();

					$sql = "select * from users where email='$email' and password='$pass' and user_type='student'";  
        			$result = mysqli_query($conn, $sql);  
       				$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
       				$count = mysqli_num_rows($result);  
        		
					if ($count==1) {
						$_SESSION['email']=$email;
						echo "<script>window.location='./student/student_home.php'</script>";
					}
					else
					{
						echo "<script>alert('username/password wrong.')</script>";
					}

				}
			?>
		</div>
	</div>
	<?php include('allfoot.php'); ?>