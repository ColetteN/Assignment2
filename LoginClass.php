<?php
class LoginClass
{
    function checkLogin($username, $password, $conn) {

        $stmt = $conn->prepare('SELECT * FROM userlogin WHERE username=:username AND password=:password');
        $stmt->execute(['username'=> $username, 'password'=> $password]);
        $userRow = $stmt->fetch();

        if($username == $userRow['username'] && ($password == $userRow['password'])) {

            echo "<h2>Welcome" . " " . $username . "</h2>";
        }
        else {


          echo "<h2>Incorrect Login</h2>";

        }

    }

}