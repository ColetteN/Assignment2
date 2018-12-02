<?php
include("dbConnect.php");
include("header.php");
session_start();
?>

<?php
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
?>

<body>
<h1>Colette's Shopping Website</h1>
<h2>Please login to start shopping....</h2>
<div id="main">
    <div id="login">
        <h1>Login Form</h1>

        <div id="inner" >

            <form  method = "post" action = "shopping.php">
                <label>UserName :</label><br /><input type = "text" name = "username" /><br /><br />
                <label>Password :</label><br /><input type = "password" name = "password" /><br/><br />
                <input type = "submit" name="submit" value = " Submit "/><br />
            </form>

        </div>

    </div>

</div>

</body>






