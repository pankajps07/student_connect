<?php
session_start();
?>
<?php
$_SESSION["username"]=="";
session_unset('username');

header('Location:../index.php');
?>