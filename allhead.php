
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Institute of Student connect</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    
	<!-- <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"> -->
	<!-- <link rel="icon" href="images/favicon.ico" type="image/x-icon"> -->
</head>

<body style="overflow-x: hidden;">
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
                <a class="navbar-brand" href="index.php">Institute of  Student Connect</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="about.php">About</a>
                    </li>
					<li>
                        <a href="student_reg.php">Registration</a>
                    </li>
                    
                    
					<li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Login <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="studentlogin.php">Student Login</a>
                            </li>
                            <li>
                                <a href="facultylogin.php">Faculty Login</a>
                            </li>
                            <li>
                                <a href="department_login.php">Department Login</a>
                            </li>
                             <li>
                                <a href="placement.php">Placement Officer Login</a>
                            </li>
                        </ul>
                    </li> 
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <?php include "database/include.php"; ?>
</header>