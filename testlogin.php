<?php include "login2.0.php";

if(isset($_SESSION['login_user'])){
    header("location: profile.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="js/metro.js"></script>
    <link rel="stylesheet" type="text/css" href="css/metro.min.css">
    <link href="css/metro-icons.css" rel="stylesheet">
    <link href="css/metro-responsive.css" rel="stylesheet">
    <link href="css/metro-schemes.css" rel="stylesheet">
    <meta charset="UTF-8">
    <title>Log In</title>
    <style>
        body {
            background-color: #323232;
        }

        form {
            background-color: #4b0096;
        }

        input {
            color: #ffffff;
        }

        .switch {
            color: #ffffff;
        }

        #Sign-In {
            border: solid;
            border-color: #1d1d1d;
            width: 300px;
            height: 220px;
            background-color: #4b0096;

            position: absolute;
            top:0;
            bottom: 0;
            left: 0;
            right: 0;

            margin: auto;
        }

        #button {
            margin: 15px;
        }

        span {
            color: white;
        }
    </style>
</head>
<body>
<div id="Sign-In">
    <form action="login2.0.php" method="post">

        <div class="input-control modern text iconic">
            <input type="text" name="gebruiker">
            <span class="label" style="color: white;">login</span>
            <span class="informer" style="color: white;">Please enter your login</span>
            <span class="placeholder" style="color: white;">Username</span>
            <span class="icon mif-user fg-white"></span>
        </div>
        <div class="input-control modern password iconic" data-role="input">
            <input type="password" name="wachtwoord">
            <span class="label" style="color: white;">You password</span>
            <span class="informer" style="color: white;">Please enter you password</span>
            <span class="placeholder" style="color: white;">Password</span>
            <span class="icon mif-lock fg-white" style="color: white;"></span>
            <button class="button helper-button reveal"><span class="mif-looks bg-white"></span></button>
        </div><br>
        <input id="button" class="button" name="submit" type="submit" value="login">
        <label class="switch">Remeber Me&nbsp;&nbsp;
            <input type="checkbox">
            <span class="check"></span>
        </label>

    </form>
</div>
</body>
</html>
