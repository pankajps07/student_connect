

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include "navbar.php" ?>
    <div>
        <br>    
        <div class="container">
            <div class="row ">
                <div class="col-12">
                    <div class="card">
                        <img class="card-img-top" src="notfi.jpg" alt="">
                        <div class="card-img-overlay">
                        <h4 class="card-title text-white" ><?php echo $name; ?></h4>
                        <p class="card-text text-white">Student</p>
                        <!-- <p data-toggle="collapse" data-target="#demo"><i style='font-size:24px' class='fas'>&#xf107;</i></p>
                    <div id="demo" class="collapse">
                    Subject : Java
                    </div>         -->
                    </div>
                        <div class="card-body">
                            <h5 class="card-title">Study Notification</h5>
                            <p class="card-text">Content</p>
                        </div>
                    </div>
                    
                </div> 
            </div><br>  
            <div class="row" >
                <div class="col-3">
                    <div class="card" style="height:200px">
                        <div class="card-body">
                            <h5 class="card-title">Upcoming</h5>
                            <p class="card-text">Content</p>
                        </div>
                    </div>
                </div>
                <div class="col-9">
                    <div class="card">
                        <div class="card-body">
                        <?php 
						$qry="select * from notification where notification_type='Study' and dept_id='$dept_id' and sem='$sem'";
						$exc=mysqli_query($conn,$qry);
						
						while ($row=mysqli_fetch_array($exc)) {
							# code...
							$faculty_id=$row['faculty_id'];
							$fac_qry="select * from faculty_details where id='$faculty_id'";
							$fac_exc=mysqli_query($conn,$fac_qry);
							while ($row2=mysqli_fetch_array($fac_exc)) {
								# code...
                                $fac_name=$row2['name'];
                                $content= $row['notification_content'];
                                $time= $row['day'];
							}
						}
					?>
                            <div class="row">
                                <div class="col-sm-1">
                                    <img class="card-img-top rounded-circle" src="Ak.jpg" alt="faculty-img">
                                    <p class="card-text"><?php echo $fac_name; ?> </p>
                                </div>
                                <div class="col-sm-2">
                                    
                                    <p><?php echo $time; ?></p>  
                                </div>
                            </div>
                                <div class="row">
                                    <h5 class="card-title"><?php echo $content; ?></h5> 
                                </div>
                            <div class="row">
                                <p class="card-text">Content</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>