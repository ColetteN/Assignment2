<?php
include("dbConnect.php");
include ('header.php');
include ('nav.php');
session_start();

?>
<h2>The following items are in your Cart</h2>

<table>
    <tr>
        <th style="color: purple">Name</th>
        <th style="color: purple">Description</th>
        <th style="color: purple">Price</th>
    </tr>

    <?php

    $sql = "SELECT * FROM products";
    $stmt = $conn->query($sql);
    while($row = $stmt->fetch()) {

        echo '
    <tr>
        <td>' . $row["p_name"] . '</td>
        <td>' . $row["p_description"] . '</td>
        <td>' . $row["p_price"] . '</td>

  </tr>';
        //var_dump($row);
    }
    ?>


</table>
