

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
                      	    <marquee direction="right">  <a style="color:red"><strong style="font-size:20px;"><i class="glyphicon glyphicon-link"></i>  &nbsp; View Subject</strong></a>  </marquee>
                      	</div>
                	</div>
                	<div class="panel-body"> 
                      <table class="table table-bordered">
                        <tr>
                          <th>Subject Code</th>
                          <th>Subject Name</th>
                          <th>Semester</th>
                          <th></th>
                        </tr>
                        <?php 
                          $qry="select * from subject where fac_id='$faculty_id' and dept_id='$dept_id'";
                          $exc=mysqli_query($conn,$qry);
                          while ($row=mysqli_fetch_array($exc)) {
                            $id=$row['id'];
                            ?>
                            <tr>
                              <td><?php echo $row['sub_code']; ?></td>
                              <td><?php echo $row['sub_name']; ?></td>
                              <td><?php echo $row['sem']; ?></td>
                              <td><a href="view_subject.php?sub_id=<?php echo $id; ?>" class="btn btn-danger">Delete</a></td>
                            </tr>
                            <?php
                          }
                        ?>
                      </table>
                      <br>
                      <hr>
                    
                     
                    </div>
                    <?php 
                      if (isset($_GET['sub_id'])) {
                        $sub_id=$_GET['sub_id'];
                        $qry="delete from subject where id='$sub_id'";
                        $exc=mysqli_query($conn,$qry);
                        if ($exc) {
                          echo "<script>window.location='view_subject.php'</script>";
                        }
                      }
                    ?>
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
