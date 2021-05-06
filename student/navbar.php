<?php
session_start();
    if(!isset($_SESSION['email'])){
        echo "<script>window.location='../index.php'</script>";
    }
    include "../database/include.php";
    $email=$_SESSION['email'];
    $qry="select * from student_details where email='$email'";
    $exc=mysqli_query($conn,$qry);
    while($row=mysqli_fetch_array($exc)){
        $name=$row['name'];
         $sem=$row['sem'];
         $dept_id=$row['dept_id'];
    }

?>


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<!-- icon -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">


<nav class="navbar navbar-expand-lg navbar-light bg-info">
  <a class="navbar-brand font-weight-bold  text-white h2" href="student_home.php">Student Connect</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse " id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link text-dark" href="student_home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="student_profile.php">Profile</a>
      </li>
      <li class="nav-item dropdown float-lg-right">
        <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Notification
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="study_notification.php">Study</a>         
          <a class="dropdown-item" href="webinar_notification.php">Webinar</a>         
          

          <a class="dropdown-item" href="certification_notification.php">Certification Course</a>     
          <?php
            if($sem>4){
              ?>
               <a class="dropdown-item" href="placement_notification.php">Placement</a> 
              <?php
            }
           ?>     
      </li>
     
     
      
      
    </ul>
    <span class=" float-lg-right">
         <a class="nav-link text-white h5 font-weight-bold" href="#" tabindex="-1" >
          <i class='fas fa-user-alt' style='font-size:24px'></i>
          Welcome <?php echo $name; ?></a>
      </span>
     <span class=" float-lg-right">
         <a class="nav-link text-danger " href="logout.php" tabindex="-1" data-toggle="tooltip" title="Logout" ><i class='fas fa-lock' style='font-size:24px'></i></a>
      </span>
   
  </div>
</nav>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>