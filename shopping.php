<?php
include("dbConnect.php");
include ('header.php');
include ('nav.php');

$username = $_POST['username'];
$password = $_POST['password'];

$stmt = $conn->prepare('SELECT * FROM userlogin WHERE username=:username AND password=:password');
$stmt->execute(['username'=> $username, 'password'=> $password]);
$user = $stmt->fetch();
//var_dump($user);
echo'
<div class="gallery">
    <img src="images/camera.jpg" alt="Camera" width="300" height="200">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
    <img src="images/drive.jpg" alt="Hard Drive" width="300" height="200">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
    <img src="images/watch.jpg" alt="Watch" width="300" height="200">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
    <img src="images/laptop.jpg" alt="Mountains" width="300" height="200">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>';

