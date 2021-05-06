<?php
session_start();
?>
<?php
$_SESSION["email"]=="";
session_unset('email');

header('Location:../index.php');
?>