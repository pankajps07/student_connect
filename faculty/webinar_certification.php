
<!DOCTYPE html>
<html lang="en">
<head>
<?php include("include/head.php"); ?>
    
</head>
<body>
<?php
    include("include/header_nav.php");
?>

<!-- Main -->
<!-- Main -->
<div class="container">
<div class="row">
  <?php include("include/left_nav.php"); ?>
    <div class="col-md-9" >
 <hr> 
		  <div class="row">
                <div class="panel panel-default">
                	<div class="panel-heading">
                      	<div class="panel-title"> 
                      	    <marquee direction="right">  <a style="color:red"><strong style="font-size:20px;"><i class="glyphicon glyphicon-link"></i>  &nbsp; Add New Notification</strong></a>  </marquee>
                      	</div>
                	</div>
                	<div class="panel-body"> 
                       <form class="form form-vertical" method="post" enctype="multipart/form-data">
                      <div class="form-group">
                            <label for="sem"> Semester</label>
                <select id="sem" name="sem" class="form-control" required>
                            <option value="" disabled="" selected>Select Semester</option>
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
                            <label for="notification_type">Notification Type</label>
						    <select id="notification_type" name="notification_type" class="form-control" required>
                            <option value="" disabled="" selected>Select Notification Type</option>
                            
                            <option value="Webinar">Webinar</option>
                            <!-- <option value="Placement">Placement</option> -->
                            <option value="Certification">Certification Course</option>
                            
                            
                            </select>
                       </div>
                       <div class="form-group">
                           <label for="notification_content">Notification Details</label>
                           <textarea name="notification_content" id="notification_content" cols="10" rows="5" class="form-control" required></textarea>
                       </div>
				        <div class="form-group">
				            <button class="btn btn-primary col-lg-3" name="add">Add</button>
				        </div>
                            
						  
						
        
                        
                        </form>
                        <?php
                            if(isset($_POST['add']))
                            {
                              $sem=$_POST['sem'];
                                //$sem=$_POST['sem'];
                                $notification_type=$_POST['notification_type'];
                                $notification_content=$_POST['notification_content'];
                                $day=date("Y-m-d H:i:s");
                                $qry="INSERT INTO `notification`( `notification_type`, `notification_content`, `dept_id`, `sem`,`faculty_id`,`day`) VALUES ('$notification_type','$notification_content','$dept_id','$sem','$faculty_id','$day')";
                                $exc=mysqli_query($conn,$qry);
                                if($exc){
                                    echo "<script>alert('Data added..');
                                            location=location;
                                    </script>";
                                }
                                else
                                {
                                    echo "<script>alert('Error');

                                            
                                    </script>".$conn -> error;
                                }
                            }
                        ?>
              </div>
         </div> 
 
  	</div><!--/col-span-9-->
</div>
</div>
    </div>

<footer><?php include("include/footer.php"); ?></footer>
        



  
<script type="text/javascript">
$(".alert").addClass("in").fadeOut(4500);

/* swap open/close side menu icons */
$('[data-toggle=collapse]').click(function(){
      // toggle icon
  	$(this).find("i").toggleClass("glyphicon-chevron-right glyphicon-chevron-down");
});
</script>
</body>
</html>
