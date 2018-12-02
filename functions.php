<?php
include('dbConnect.php');
session_start();

function LogIn()
{
    //session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(!empty($_POST['username']))   //checking
    {
        //connect here to the database
        //$conn = new PDO('mysql:host=localhost;dbname=shoppingcart', 'root', '');
        $stmt = $conn->prepare('SELECT * FROM userlogin WHERE username=:username AND password=:password');
        $stmt->execute(['username'=> $username, 'password'=> $password]);
        $user = $stmt->fetch();

        if(!empty($row['username']) AND !empty($row['password']))
        {
            $_SESSION['username'] = $row['password'];
            echo "Welcome";

        }
        else
        {
            echo "Wrong username or password";
        }
    }

}
if(isset($_POST['submit']))
{
    LogIn();
}