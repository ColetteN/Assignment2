<?php
include("dbConnect.php");
include("header.php");
session_start();
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $myusername = mysqli_real_escape_string($db,$_POST['username']);
    $mypassword = mysqli_real_escape_string($db,$_POST['password']);

    $sql = "SELECT id FROM admin WHERE username = '$myusername' and passcode = '$mypassword'";
    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $active = $row['active'];

    $count = mysqli_num_rows($result);

    // If result matched $myusername and $mypassword, table row must be 1 row

    if($count == 1) {
        session_register("myusername");
        $_SESSION['login_user'] = $myusername;

        header("location: welcome.php");
    }else {
        $error = "Your Login Name or Password is invalid";
    }
}
?>


<html>

<body>

<div id="main">
    <div id="login">
      <h1>LOGIN</h1>

        <div id="inner" >

            <form action = "" method = "post">
                <label>UserName  :</label><br /><input type = "text" name = "username" /><br /><br />
                <label>Password  :</label><br /><input type = "text" name = "password" /><br/><br />
                <input type = "submit" value = " Submit "/><br />
            </form>

        </div>

    </div>

</div>

</body>
</html>
