<?php
include('connection.php');
session_start();
$user_check=$_SESSION['user_name'];
$loggedin = true;
$sql = mysqli_query($db,"SELECT inlognaam FROM customer WHERE inlognaam='$user_check' ");

if(!isset($user_check))
{
    $loggedin = false;
}