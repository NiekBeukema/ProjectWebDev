<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Contact Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SSS</title>
    <link href="css/bootstrap.css" rel="stylesheet">

    <link href="css/jquery.bxslider.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
<nav class="navbar navbar-default" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Student Software Services</a>
        </div>
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <li><a href="index.php" >Home</a></li>
                <li><a href="catalogue.php">Catalogue</a></li>
                <li><a href="cart.php">Shopping Cart</a></li>
                <li><a href="support.php" class="active">Customer Support</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="nav-dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php //echo $_SESSION['user_firstname'] . " " . $_SESSION['user_lastname'];?> <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Customer Area</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-tags"></span> Products</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#"><span class="glyphicon glyphicon-off""></span> Log out</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    <h1>Customer Support</h1>
        <form action="contact.php" method="post" id="contact">
            Your name<br>
            <input type="text" class="form-control" name="cf_name"><br clear="all"/>
            Your e-mail<br>
            <input type="text" class="form-control" name="cd_email"><br clear="all"/>
            how can we help you?<br>
            <textarea class="form-contorl" name="cf_message"></textarea><br>
            <input type="submit" value="Send">
            <input type="reset" value="Clear">
        </form>


<div class="col-lg-3 col-md-3 col-sm-6">
    <div class="column">

        <ul>

            <li><h3>Adress: ijsselstraat 40B, 9725GG, Groningen</h3></a></li>
            <li><h3>Phone: +31504201337</h3></li>

        </ul>
    </div>
</div>
    </div>

    <footer>
        <div class="container">
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="column">
                    <h4>Information</h4>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Policy Privacy</a></li>
                        <li><a href="#">Terms and Conditions</a></li>
                        <li><a href="#">Shipping Methods</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="column">
                    <h4>Customer Service</h4>
                    <ul>
                        <li><a href="contact.html">Contact Us</a></li>
                        <li><a href="#">Adress: Over the rainbow</a></li>
                        <li><a href="#">Phone: +31504201337</a></li>
                        <li><a href="#">Email: poepchinees@outlook.com</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="column">
                    <h4>Follow Us</h4>
                    <ul class="social">
                        <li><a href="#">Google Plus</a></li>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">RSS Feed</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="navbar-inverse text-center copyright">
            Copyright &copy; 2015 Poepchinees All right reserved
        </div>
    </footer>

    <a href="#top" class="back-top text-center" onclick="$('body,html').animate({scrollTop:0},500); return false">
        <i class="fa fa-angle-double-up"></i>
    </a>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.bxslider.min.js"></script>
    <script src="js/jquery.blImageCenter.js"></script>
    <script src="js/animatie.js"></script>

</body>
</html>
