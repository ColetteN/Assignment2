<?php
include("Connect.php");
include ('header.php');
include ('nav.php');
session_start();

//Get the post data and put in a var
//Add the var to the session array
if($_SESSION['session_cart'] == null){
    $_SESSION['session_cart'] = array();
};
array_push($_SESSION["session_cart"],$_POST["product_id"]);
//Have an array of product ids in the session
?>
<h2>The following items are in your Cart</h2>

<!--Have an array of product ids in the session-->
<!-- Loop through the array-->
<!-- To get the id of the product and take from the database-->
<!--Display the products inside in session cart-->
    <?php
    $sql = "SELECT * FROM products";
    $stmt = $conn->query($sql);
    $cart_product = $_POST['p_id'];



    while ($row = $stmt->fetch()) {
    foreach ($_SESSION["session_cart"] as $product_id) {
    if ($row["p_id"] == $product_id) {
        ?>
        <div class="container">
            <div class="product">
                <?php echo '<img src="images/' . $row["p_image"] . '">'; ?>

                <div class="desc">
                    <p><?php echo $row["p_name"]; ?></p>
                    <p><?php echo $row["p_description"]; ?></p>
                    <p><?php echo "€" . $row["p_price"]; ?></p>
                </div>
            </div>
        </div>

        <?php
    }
}
}
?>
