
<?php 
    session_start();
    if (!isset($_SESSION['username'])) {
        echo "<script>window.location='../index.php'</script>";
    }
     include("../database/include.php" );
    $username=$_SESSION['username'];
    $qry="select * from departments where username='$username'";
    $exc=mysqli_query($conn,$qry);
    while ($row=mysqli_fetch_array($exc)) {
        $dept_id=$row['dept_id'];
        $dept_name=$row['dept_name'];
    }

    ?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Department</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    
</head>

<body>
<header>
<!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index">Institute of  Student Connect</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="department_home.php">Home</a>
                    </li>
					<li>
                        <a href="about.php">About</a>
                    </li>
                  <li>
                       <a href="logout.php" style="font-size: x-large;"><span class="glyphicon glyphicon-off title=" title="logout"></span> </a>
                       
                    </li>			
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <?php include("../database/include.php" ); ?>
</header>