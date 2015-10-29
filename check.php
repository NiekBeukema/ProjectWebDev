<?php
include('connection.php');
session_start();
$user_check=$_SESSION['username'];
$loggedin = true;
$sql = mysqli_query($db,"SELECT inlognaam FROM customer WHERE inlognaam='$user_check' ");

$row=mysqli_fetch_array($sql,MYSQLI_ASSOC);

$login_user=$row['inlognaam'];
$login_rol=$row['user_role'];
$login_firstname=$row['voornaam'];
$login_lastname=$row['achternaam'];

if(!isset($user_check))
{
    $loggedin = false;
}