
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
                      	    <marquee direction="right">  <a style="color:red"><strong style="font-size:20px;"><i class="glyphicon glyphicon-link"></i>  &nbsp; Add New Subject</strong></a>  </marquee>
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
                            <label for="notification_type">Subject Code</label>
                            <input type="text" name="sub_code" class="form-control" required="">
						    
                       </div>
                       <div class="form-group">
                           <label for="notification_content">Subject Name</label>
                           <input type="text" name="sub_name" class="form-control" required="">
                          
                       </div>
				        <div class="form-group">
				            <button class="btn btn-primary col-lg-3" name="add">Add</button>
				        </div>
                            
						  
						
        
                        
                        </form>
                        <?php
                            if(isset($_POST['add']))
                            {
                                $sem=$_POST['sem'];
                                $sub_code=$_POST['sub_code'];
                                $sub_name=$_POST['sub_name'];
                             
                                $qry="INSERT INTO `subject`(`sub_code`, `sub_name`, `fac_id`, `dept_id`, `sem`) VALUES('$sub_code','$sub_name','$faculty_id','$dept_id','$sem')";
                                $exc=mysqli_query($conn,$qry);
                                if($exc){
                                    echo "<script>alert('subject added..');
                                            window.location='view_subject.php';
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
