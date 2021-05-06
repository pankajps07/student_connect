<?php

    if(!isset($_SESSION['email'])){
        echo "<script>window.location='../index.php'</script>";
    }
    $email=$_SESSION['email'];
    $qry="select * from faculty_details where email='$email'";
    $exc=mysqli_query($conn,$qry);
    while($row=mysqli_fetch_array($exc)){
        $name=$row['name'];
        $faculty_id=$row['id'];
        $dept_id=$row['dept_id'];
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
        <li><a href="faculty_home.php" class="link" style=""><i class='fas fa-wallet'' style=''></i>&nbsp Dashboard</a></li>

        <li class="dropdown nav-header" >
          <a data-toggle="collapse" data-target="#demo2" class="link" ><i class='fas fa-bell'' style=''></i>&nbsp Post Notification &nbsp&nbsp&nbsp<span class="caret"></span></a>
          <ul id="demo2" class="collapse nav nav-pills nav-stacked" >

            <li><a href="study_notification.php" class="col-lg-offset-1 link"> Study</a></li>
            <li><a href="webinar_certification.php" class="col-lg-offset-1 link"> Webinar/Certification </a></li>

          </ul>
        </li>
          <li class="dropdown nav-header" >
          <a data-toggle="collapse" data-target="#demo3" class="link" ><i class='fas fa-tasks'' style=''></i>&nbsp View Notification &nbsp&nbsp&nbsp<span class="caret"></span></a>
          <ul id="demo3" class="collapse nav nav-pills nav-stacked" >

            <li><a href="view_study_notification.php" class="col-lg-offset-1 link"> Study</a></li>
            <li><a href="view_webinar_notification.php" class="col-lg-offset-1 link"> Webinar</a></li>
            <li><a href="view_certification_notification.php" class="col-lg-offset-1 link"> Certification Course</a></li>

          </ul>
        </li>



         <li><a href="add_subject.php" class="link" style=""><i class='fas fa-plus'' style=''></i>&nbsp Add Subject</a></li>

         <li><a href="view_subject.php" class="link" style=""><i class='fas fa-id-card'' style=''></i>&nbsp View Subjects</a></li>

        <li><a href="view_student.php" class="link" style=""><i class='fas fa-id-card'' style=''></i>&nbsp View Students</a></li>

      
        


       
        
    </ul>
</div><!-- /col-3 -->
