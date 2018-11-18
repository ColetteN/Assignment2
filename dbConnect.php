<?php
//connect here to the database
try {   $conn = new PDO('mysql:host=localhost;dbname=shoppingcart', 'root');//connect here to the database
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//for errors
}
catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
//this will be equal to $_POST when grabbing data from a form
$email = 'colettenash.webdeveloper@gmail.com';

//prepared statement to select from database
$stmt=$conn->prepare('SELECT * FROM userlogin WHERE email=:email');
$stmt->execute(['email'=>$email]);
$user=$stmt->fetch();

//var_dump($user);

//Get array containing all of the result rows
$stmt=$conn->query('SELECT * FROM userlogin');
$result = $stmt->fetchAll();
foreach($result as $row) {
    print_r($row);
}
