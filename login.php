<?php
session_start();
include("connection.php"); //Establishing connection with our database

$error = ""; //Variable for storing our errors.
if(isset($_POST["submit"]))
{
    if(empty($_POST["username"]) || empty($_POST["password"]))
    {
        $error = "Both fields are required.";
    }else
    {
// Define $username and $password
        $username=$_POST['gebruiker'];
        $password=$_POST['wachtwoord'];

// To protect from MySQL injection
        $username = stripslashes($username);
        $password = stripslashes($password);
        $username = mysql_real_escape_string($username);
        $password = mysql_real_escape_string($password);
        $password = md5($password);

//Check username and password from database
        try{
            $sql="SELECT customer_id FROM gebruiker WHERE inlognaam='$username' and wachtwoord='$password'";
            $result=mysqli_query($db,$sql);
            $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
            echo "<script type='text/javascript'>alert('{$row['user_role']}');</script>";
        }

        catch(Exception $e){
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }


//If username and password exist in our database then create a session.
//Otherwise echo error.

        if(mysqli_num_rows($result) == 1)
        {
            switch($row['user_role']) {
                case 0 :
                    $_SESSION['username'] = $login_user; // Initializing Session
                    header("location: profile.php"); // Redirecting To Other Page
                case 1 :
                    $_SESSION['username'] = $login_user; // Initializing Session
                    header("location: proprofile.php"); // Redirecting To Other Page
                case 2 :
                    $_SESSION['username'] = $login_user; // Initializing Session
                    header("location: admprofile.php"); // Redirecting To Other Page
            }

        }else
        {
            $error = "Incorrect username or password.";
        }

    }

}
?>
