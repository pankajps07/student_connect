

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
                      	    <marquee direction="right">  <a style="color:red"><strong style="font-size:20px;"><i class="glyphicon glyphicon-link"></i>  &nbsp; Webinar Notification</strong></a>  </marquee>
                      	</div>
                	</div>
                	<div class="panel-body"> 
                     
                      
                  
                                <table class="table table-stripped table-bordered">
                                   
                                  
                                    <tr>
                                        <th>Id</th>
                                        <th>Notification Content</th>
                                        
                                        <th>Semester</th>
                                        <th>Time</th>
                                    </tr>
                                    <?php
                                         $qry="select * from notification n 
                                         where n.faculty_id='$faculty_id'
                                         and n.notification_type='Webinar'";
                                         $exc=mysqli_query($conn,$qry);
                                         while ($row=mysqli_fetch_array($exc)) {
                                           # code...
                                         
                                    ?>
                                    <tr>
                                        <td><?php echo $id=$row['id']; ?></td>
                                        <td><?php echo $row['notification_content']; ?></td>
                                       
                                        <td>
                                          <?php echo $row['sem']; ?>
                                        </td>
                                        <td><?php echo $row['day']; ?></td>
                                       
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
