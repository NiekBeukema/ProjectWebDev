<?php
include('connection.php');
session_start();
$user_check=$_SESSION['username'];
$loggedin = true;
$sql = mysqli_query
($db,"SELECT username FROM users WHERE username='$user_check' ");

$row=mysqli_fetch_array($sql,MYSQLI_ASSOC);

$login_user=$row['username'];
$login_rol=$row['userrole'];

if(!isset($user_check))
{
    $loggedin = false;
}