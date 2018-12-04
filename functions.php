<?php
include('dbConnect.php');
include('LoginClass.php');
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$login = new LoginClass();
$login->checkLogin($username, $password, $conn);
