<?php
class LoginClass
{
    //pass the properties into the constructor
    public $username;
    public $password;

    //constructor
    public function __construct($username, $password)
    {
        echo $this->setProperty($username, $password);
    }

    //set the property here and call it in the calculator.php
    public function setProperty($username, $password)
    {
        if (!empty($_POST['username']) && !empty($_POST['password'])) {

            if ($_POST['username'] == 'Colette Nash' && $_POST['password'] == 'password') {

                echo 'You have entered a valid username and password';
            }
            else {
                echo 'Wrong username or password, please try again';
            }
        }
        //This is the default action
        else {
            echo 'Please enter username or password';
        }

    }
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
                <input type = "submit" value = " Submit "/><br />
            </form>

        </div>

    </div>

</div>

</body>
