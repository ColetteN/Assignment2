<?php
include('dbConnect.php');
include ('header.php');
include ('nav.php');
include ('functions.php');
//include('LoginClass.php');

session_start();

$value=$cookie_value;
//session name your variables go here
$_SESSION["session_name"]=$value;
//echo $_SESSION["session_name"];

////Cookie Stuff////
//if cookie is not set make one
if(!isset($_COOKIE["user"])) {
    echo "no cookie:";
    //make the cookie here and set timestamp
    setcookie("user", time(), time() + (86400 * 30), "/"); // 86400 = 1 day
    //create the var for the cookie value now that it is set
    $cookie_value = $_COOKIE["user"];
    //either way set the value of the cookie
} else {
    $cookie_value = $_COOKIE["user"];
}
//echo "user";
?>

<?php
//echo("<h2>Welcome" . " " . $username . "</h2>" . "<br><br>");

$sql = "SELECT * FROM products";
$stmt = $conn->query($sql);
$cart_product = $_POST['p_id'];

while ($row = $stmt->fetch()) {

?>
<div class="container">
    <div class="product">
        <form method="post" action="cart.php?action=add&id=<?php echo $row["p_id"] ?>" >

            <?php echo '<img src="images/'  . $row["p_image"] .  '">';?>

            <div class="desc">
                <?php echo '<input type="hidden"  name="product_id" value="' . $row["p_id"] . '"/>'?>
                <p><?php echo $row["p_name"];?></p>
                <p><?php echo $row["p_description"];?></p>
                <p><?php echo "€" . $row["p_price"];?></p>
                <p><input style="width: 100%" type="submit" value="Add to Cart"/></p>

            </div>

        </form>
    </div>
</div>

 <?php
}
?>