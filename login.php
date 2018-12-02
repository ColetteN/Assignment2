<?php
include("header.php");
include('LoginClass.php'); //include the class

$username = 'username';
$password = 'password';

$obj = new LoginClass($username,$password );

session_start();
?>



