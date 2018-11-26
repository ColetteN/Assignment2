<?php
//include("dbConnect.php");
include("header.php");
session_start();
?>

<body>
<h1>Colette's Shopping Website</h1>
<h2>Please login to start shopping....</h2>
<div id="main">
    <div id="login">
      <h1>Login Form</h1>

        <div id="inner" >

            <form  method = "post" action = "shopping.php">
                <label>UserName  :</label><br /><input type = "text" name = "username" /><br /><br />
                <label>Password  :</label><br /><input type = "password" name = "password" /><br/><br />
                <input type = "submit" value = " Submit "/><br />
            </form>

        </div>

    </div>

</div>

</body>

