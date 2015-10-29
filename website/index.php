

<!DOCTYPE html>
<?php
include('login.php');
session_start();?>

<html>

<head>

    <title>User Login</title>
    <meta charset="UTF-8">

</head>

<body>

<form action=”login.php” method=”post”>

    <table width=”500? align=”center” bgcolor=”skyblue”>

        <tr align=”center”>

            <td colspan=”3?><h2>User Login</h2></td>

        </tr>

        <tr align=”center”>

            <td colspan=”3?>

                <input type=”text” name=”gebruiker” value=”username”/>

            </td>

        </tr>
        <tr>

            <td align=”center”><b>Password:</b></td>

            <td><input type=”password” name=”wachtwoord” required=”required></td>

        </tr>

        <tr>
            <td><input type="submit" name="submit" value="submit" /></td>
        </tr>


    </table>

</form>

</body>

</html>