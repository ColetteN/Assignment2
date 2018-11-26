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

<div class="product">
<?php
    //get all product images from the db table
    //this is returned as an array
    //loop through the array
    $sql = "SELECT * FROM products";
    $stmt = $conn->query($sql);

while($row = $stmt->fetch()) {
    echo '<img src="images/watch.jpg?id='  . $row["p_id"] .  '">' . $row["p_description"] . $row["p_name"] . $row["p_price"];
    var_dump($row);
}

?>

</div>


<!---->
<!--<div class="product">-->
<!--    <img src="image/camera.jpg" alt="Camera" width="300" height="200">-->
<!--</div>-->

