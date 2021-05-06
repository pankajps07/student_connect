<?php

    if(!isset($_SESSION['email'])){
        echo "<script>window.location='../index.php'</script>";
    }
    $email=$_SESSION['email'];
    $qry="select * from placement_officer where email='$email'";
    $exc=mysqli_query($conn,$qry);
    while($row=mysqli_fetch_array($exc)){
        $name=$row['name'];
        $faculty_id=$row['id'];
        
    }

?>	
  <style type="text/css">
   .link{
    font-size: 20px;
    color:black;
   }
  </style>
   <div class="col-md-3">
      <!-- Left column -->
      <hr>
     <ul class="nav nav-pills nav-stacked" style="" class="xyz">
        <li class="nav-header"></li>
        <li><a href="placement_officer_home.php" class="link" style=""><i class='fas fa-wallet' style=''></i>&nbsp Dashboard</a></li>
         <li><a href="post_placement_notification.php" class="link" style=""><i class='fas fa-bell' style=''></i>&nbsp Post Notification</a></li>

         <li><a href="view_placement_notification.php" class="link" style=""><i class='fas fa-tasks' style=''></i>&nbsp View Notification</a></li>
    </ul>
</div><!-- /col-3 -->
