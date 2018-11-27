<?php

include("dbConnect.php");
include ('header.php');
include ('nav.php');

$username = $_POST['username'];
$password = $_POST['password'];
?>



<?php
$stmt = $conn->prepare('SELECT * FROM userlogin WHERE username=:username AND password=:password');
$stmt->execute(['username'=> $username, 'password'=> $password]);
$user = $stmt->fetch();
echo("<h2>Welcome" . " " . $username . "</h2>" . "<br><br>");


$sql = "SELECT * FROM products";
$stmt = $conn->query($sql);
$cart_product = $_POST['p_id'];

while ($row = $stmt->fetch()) {

//    echo '<img src="images/watch.jpg?id='  . $row["p_id"] .  '">' . " " . $row["p_name"] . " " . $row["p_description"] . " " . $row["p_price"];
//    echo '<input style="width: 10%" type="submit" value="Add to Cart" />';
?>

<form method="post" action="cart.php?action=add&id=<?php echo $row["p_id"] ?>" >
    <div class="product">
        <img src="<?php echo $row["p_image"]; ?>">
        <div class="desc">

            <?php echo $row["p_name"];?><br><br>
            <?php echo $row["p_description"];?><br><br>
            <?php echo $row["p_price"];?><br><br>
            <p><input style="width: 100%" type="submit" value="Add to Cart" /></p><br>
        </div>
    </div>
</form>
 <?php
}
?>