<?php include('allhead.php'); ?>


<div class="container" style="max-width: 1200px;">
	<div class="row">
		

	</div>
	<div class="row">
		<div class="col-md-12">
			<form name="register" action="" method="POST" >
				<fieldset>
					<legend>
						<h3 style="padding-top: 25px;">Student Registration Form </h3>
					</legend>
					<div class="control-group form-group">
						<div class="controls">
							<label> Name: <span style="color: #ff0000;">*</span></label>
							<input type="text" class="form-control" name="name" id="name" maxlength="30">
							
						</div>
					</div>

					

					<div class="control-group form-group">
						<div class="controls">
							<label>USN: <span style="color: #ff0000;">*</span></label>
							<input type="text" class="form-control" name="usn" id="usn" maxlength="15">
							<p class="help-block"></p>
						</div>
					</div>
					<div class="control-group form-group">
						<div class="controls">
							<label>Department: <span style="color: #ff0000;">*</span></label>
							<select id="dept_id" name="dept_id" class="form-control" required>
                            <option value="#" disabled="" selected>Select Department</option>
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
                            
                            </select>
							
						</div>
					</div>
					<div class="control-group form-group">
						<div class="controls">
							<label>Semester: <span style="color: #ff0000;">*</span></label>
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
					</div>

					

				

					<div class="control-group form-group">
						<div class="controls">
							<label>Gender: <span style="color: #ff0000;">*</span></label>
							<p>
								<label>
										<input type="radio" name="gender" value="Male" id="Gender_0" checked>
											Male
								</label>
							

								<label>
										<input type="radio" name="gender" value="Female" id="Gender_1">
										Female
								</label>
							
								<br>
							</p>
							<p class="help-block"></p>
						</div>
					</div>

					
					<div class="control-group form-group">
						<div class="controls">
							<label>Email Id: <span style="color: #ff0000;">*</span></label>
							<input type="text" class="form-control" name="email" id="email" maxlength="50">
							
						</div>
					</div>


					<div class="control-group form-group">
						<div class="controls">
							<label>Password: <span style="color: #ff0000;">*</span></label>
							<input type="password" class="form-control" name="password" id="password" maxlength="10"> <span style="color: #ff0000;">*Max 10</span>
							<p class="help-block"></p>
						</div>
					</div>

					<button type="submit" name="submit" class="btn btn-primary">Register</button>
					<button type="reset" name="reset" class="btn btn-danger">Clear</button>


				</fieldset>
			</form>
			<?php 
				if (isset($_POST['submit']))
				 {
					$name=$_POST['name'];
					$usn=$_POST['usn'];
					$deptid=$_POST['dept_id'];
					$semester=$_POST['sem'];
					$gender=$_POST['gender'];
					$email=$_POST['email'];
					$password=$_POST['password'];

					$qry1="INSERT INTO `users`(`email`, `password`, `user_type`) VALUES('$email','$password','student')";
					$exc=mysqli_query($conn,$qry1);
					$qry2="INSERT INTO `student_details`(`usn`, `name`, `sem`, `email`, `dept_id`, `gender`) VALUES('$usn','$name','$semester','$email','$deptid','$gender')";
					
					if (mysqli_query($conn,$qry2)) {
						echo "<script>alert('Registered Successfull')</script>";
					}
					else
					{
						echo "<script>alert('Error')</script>";
					}
				}
			?>
		</div>
	</div>
</div>
<?php include('allfoot.php'); ?>