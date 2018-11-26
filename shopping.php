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
?>


<?php

    $sql = "SELECT * FROM products";
    $stmt = $conn->query($sql);

while ($row = $stmt->fetch()) {
    echo '<img src="images/watch.jpg?id='  . $row["p_id"] .  '">' . $row["p_name"] . " " .
        $row["p_description"] . " " . $row["p_price"];
    //var_dump($row);
}

?>
