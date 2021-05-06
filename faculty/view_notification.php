

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
                      	    <marquee direction="right">  <a style="color:red"><strong style="font-size:20px;"><i class="glyphicon glyphicon-link"></i>  &nbsp; View Notification</strong></a>  </marquee>
                      	</div>
                	</div>
                	<div class="panel-body"> 
                     
                      
                  
                                <table class="table table-stripped table-bordered">
                                   
                                  
                                    <tr>
                                        <th>Id</th>
                                        <th>Notification Content</th>
                                        <th>Subject</th>
                                        <th>Time</th>
                                    </tr>
                                    <?php
                                         $qry="select * from notification where  faculty_id='$faculty_id' and dept_id='$dept_id'";
                                        $exc=mysqli_query($conn,$qry);

                                        echo mysqli_error($conn);
                                        while($row=mysqli_fetch_array($exc)){
                                          $subject=$row['subject_id'];

                                          $sub_qry="select * from subject where id='$subject'";
                                          $sub_exc=mysqli_query($conn,$sub_qry);
                                          while ($sub_row=mysqli_fetch_array($sub_exc)) {
                                            $subject_name=$sub_row['sub_name'];
                                          }
                                    ?>
                                    <tr>
                                        <td><?php echo $id=$row['id']; ?></td>
                                        <td><?php echo $row['notification_content']; ?></td>
                                        <td>
                                          <?php  echo $subject_name;  ?>
                                        </td>
                                        <td><?php echo $row['day']; ?></td>
                                        <td><a href="" class="btn btn-primary">Edit</a></td>
                                        <td><a href="" class="btn btn-danger">Delete</a></td>
                                        
                                    </tr>
                                    <?php } //while loop cls ?>
                                </table>
                                
                               
                     
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
