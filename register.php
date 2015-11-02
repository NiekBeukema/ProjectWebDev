<!DOCTYPE html>
<html lang="en">
<head>
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


<!-- Navigation -->
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
                <li><a href="index.php" class="active">Home</a></li>
                <li><a href="catalogue.php">Catalogue</a></li>
                <li><a href="cart.php">Shopping Cart</a></li>
                <li><a href="support.php">Customer Support</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="nav-dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php //echo $_SESSION['user_firstname'] . " " . $_SESSION['user_lastname'];?> <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Customer Area</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-tags"></span> Products</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#"><span class="glyphicon glyphicon-off"></span> Log out</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<br/>
<div class="container">

    <div class="col-lg-4 col-md-4 col-sm-4">

        <!-- Login Form    -->
        <form action="login.php" method="post" id="login">
            <div class="white-container">
                <span class="title">ALREADY REGISTERED ?</span>
                <form role="form">
                    <div class="form-group">
                        <div class="input-group login-input">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input type="text" class="form-control" placeholder="Email">
                        </div>
                        <br>
                        <div class="input-group login-input">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input type="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Remember me
                            </label>
                        </div>
                        <button type="submit" class="btn btn-sm btn-primary pull-right"><i class="fa fa-long-arrow-right"></i> Login</button>
                    </div>
                </form>
            </div>
            <!-- End Login Form -->

    </div>
    <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="white-container">
            <span class="title">REGISTER</span>

            <!-- Form Register -->
            <form action="registration.php" method="post" id="register">
                <div style="background-color: red" id="error"></div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <label for="first_name">First Name (*)</label>
                    <input type="text" class="form-control" name="first_name"><br clear="all"/>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <label for="last_name">Last Name (*)</label>
                    <input type="text" class="form-control" name="last_name"><br clear="all"/>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <label for="email">Email (*)</label>
                    <input type="text" class="form-control" name="email"><br clear="all"/>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <label for="username">Confirm Email (*)</label>
                    <input type="text" class="form-control" name="username"><br clear="all"/>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <label for="password">Password (*)</label>
                    <input type="password" class="form-control" name="password"><br clear="all"/>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <label for="confirm_password">Confirm Password (*)</label>
                    <input type="password" class="form-control" name="confirm_password"><br clear="all"/>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <label for="user_role">City</label>
                    <input type="text" class="form-control" name="plaats"><br clear="all"/>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <label for="user_role">PostCode</label>
                    <input type="text" class="form-control" name="postcode"><br clear="all"/>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <label for="user_role">Adress</label>
                    <input type="text" class="form-control" name="straatnaam"><br clear="all"/>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <label for="user_role">PhoneNumber</label>
                    <input type="text" class="form-control" name="telefoonnummer"><br clear="all"/>
                </div>
                <div class="clearfix"></div>
                <button type="submit" class="btn btn-danger">Register</button>
                </br>
            </form>
    </br>
            <!-- End Form Registe5r -->
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
<script src="js/jquery.blImageCenter.js"></script>
<script src="js/bootstrap.touchspin.js"></script>
<script src="js/animatie.js"></script>
</body>


</html>