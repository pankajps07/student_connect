<?php date_default_timezone_set("Asia/Calcutta"); 
$today = date("Y-m-d");
$time =date("h:i");

include("./../database/include.php");
session_start();   
	$email=$_SESSION['email'];
    $qry="select * from faculty_details where email='$email'";
    $exc=mysqli_query($conn,$qry);
    while($row=mysqli_fetch_array($exc)){
        $name=$row['name'];
        $faculty_id=$row['id'];
        $dept_id=$row['dept_id'];
    }
?>

<meta charset="utf-8"> 
    <title>Student Connect</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">

    </style>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<link href="css/style.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
