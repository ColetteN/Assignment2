<?php

include("dbConnect.php");
include ('header.php');
include ('nav.php');

$username = $_POST['username'];
$password = $_POST['password'];
?>

<div class="product">

<?php
$stmt = $conn->prepare('SELECT * FROM userlogin WHERE username=:username AND password=:password');
$stmt->execute(['username'=> $username, 'password'=> $password]);
$user = $stmt->fetch();
echo("<h2>Welcome" . " " . $username . "</h2>" . "<br><br>");

$sql = "SELECT * FROM products";
$stmt = $conn->query($sql);

while ($row = $stmt->fetch()) {

    echo '<img src="images/watch.jpg?id='  . $row["p_id"] .  '">' . " " . "<a href=\"cart.php\">Add to Cart</a>"
        . " " . $row["p_name"] . " " . $row["p_description"] . " " . $row["p_price"];

}
?>
    <form>

    </form>

</div>
