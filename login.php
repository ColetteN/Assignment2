<?php
include("dbConnect.php");
include("header.php");
session_start();
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
