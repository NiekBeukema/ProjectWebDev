

<?php
// establishing the MySQLi connection
include("connection.php"); //Establishing connection with our database
session_start();

if (mysqli_connect_errno())

{

    echo "MySQLi Connection was not established: " . mysqli_connect_error();

}

// checking the user

if(isset($_POST['submit'])){

    $username = mysqli_real_escape_string($db,$_POST['gebruiker']);

$password = mysqli_real_escape_string($db,$_POST['wachtwoord']);

$sel_user = "select * from gebruiker where wachtwoord='$password' AND inlognaam='$username'";

$run_user = mysqli_query($db, $sel_user);

$check_user = mysqli_num_rows($run_user);
$row =mysqli_fetch_array($run_user,MYSQLI_ASSOC);

if($check_user>0){

$_SESSION['inlognaam']=$username;
$_SESSION['achternaam']= $row['achternaam'];
$_SESSION['plaats']= $row['plaats'];
$_SESSION['straatnaam']= $row['straatnaam'];
$_SESSION['telefoonnummer']= $row['telefoonnummer'];
$_SESSION['e_mail']= $row['e_mail'];
$_SESSION['postcode']= $row['postcode'];
$_SESSION['voornaam']= $row['voornaam'];



echo "<script>window.open('index.php','_self')</script>";

}

else {

echo "<script>alert('Email or password is not correct, try again!')</script>";

}

}
?>