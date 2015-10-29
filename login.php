<?php

// establishing the MySQLi connection



$con = mysqli_connect("localhost","root","","jematje");

if (mysqli_connect_errno())

{

    echo "MySQLi Connection was not established: " . mysqli_connect_error();

}

// checking the user

if(isset($_POST['submit'])){

$email = mysqli_real_escape_string($con,$_POST['gebruiker']);

$pass = mysqli_real_escape_string($con,$_POST['wachtwoord']);

$sel_user = "select * from gebruiker where inlognaam='$email' AND wachtwoord='$pass'";

$run_user = mysqli_query($con, $sel_user);

$check_user = mysqli_num_rows($run_user);

$result = $run_user->fetch_fields();

if($check_user>0){


    $_SESSION['user_role']=$result['user_role'];
    $_SESSION['user_firstname']=$result['voornaam'];
    $_SESSION['user_lastname']=$result['achternaam'];
    $_SESSION['user_name']=$email;

echo "<script>window.open('index.php','_self')</script>";

}

else {

echo "<script>alert('Email or password is not correct, try again!')</script>";

}

}

?>