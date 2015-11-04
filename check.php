<?php
include('connection.php');
session_start();
$loggedin = true;

if(!isset($_SESSION["inlognaam"]))
{
    $loggedin = false;
} else {
    $user_check=$_SESSION['inlognaam'];
    $sql = mysqli_query($db,"SELECT inlognaam FROM customer WHERE inlognaam='$user_check' ");
}

