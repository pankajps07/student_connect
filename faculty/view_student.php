

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
                      	    <marquee direction="right">  <a style="color:red"><strong style="font-size:20px;"><i class="glyphicon glyphicon-link"></i>  &nbsp; View Students</strong></a>  </marquee>
                      	</div>
                	</div>
                	<div class="panel-body"> 
                      <form action="" method="post">
                          <div class="form-group">
                              <label for="sem">Semester</label>
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
                           <button class="btn btn-success col-lg-3" name="view">View Students</button>
                       </div>
                      </form>
                      <br>
                      <hr>
                      <?php
                            if(isset($_POST['view'])){
                                $sem=$_POST['sem'];
                                
                                ?>
                                <table class="table table-stripped table-bordered">
                                   <tr>
                                       
                                       <th style="background-color:black" colspan="2"><h4 style="color:red">Semester:</h4></th>
                                       
                                       <td style="background-color:black" colspan="2"><h4 class="text-primary"><?php echo $sem; ?></h4></td>
                                   </tr>
                                  
                                    <tr>
                                        <th>USN</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th></th>
                                    </tr>
                                    <?php
                                         $qry="select * from student_details where sem='$sem' and dept_id='$dept_id'";
                                        $exc=mysqli_query($conn,$qry);
                                        while($row=mysqli_fetch_array($exc)){
                                    ?>
                                    <tr>
                                        <td><?php echo $id=$row['usn']; ?></td>
                                        <td><?php echo $row['name']; ?></td>
                                        <td><?php echo $row['email']; ?></td>
                                        <td><a href="" class="btn btn-primary">Edit</a></td>
                                        <td><a href="" class="btn btn-danger">Delete</a></td>
                                        
                                    </tr>
                                    <?php } //while loop cls ?>
                                </table>
                                
                                <?php
                            
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
