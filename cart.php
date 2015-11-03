<?php include('check.php');
?>

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Shopping Cart - Mimity</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
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
                <li><a href="index.php">Home</a></li>
                <li><a href="catalogus.php">Catalogue</a></li>
                <li><a href="cart.php" class="active">Shopping Cart</a></li>
                <li><a href="contact_form.php">Customer Support</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="nav-dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['voornaam'] . " " . $_SESSION['achternaam'];?> <span class="caret"></span></a>
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
<!-- End Navigation -->

<div class="container main-container">
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-12">



        </div>

        <div class="clearfix visible-sm"></div>

        <!-- Cart -->
        <div class="col-lg-9 col-md-9 col-sm-12">
            <div class="col-lg-12 col-sm-12">
                <span class="title">SHOPPING CART</span>
            </div>
            <div class="col-lg-12 col-sm-12 hero-feature">
                <div class="table-responsive">
                    <table class="table table-bordered tbl-cart">
                        <thead>
                        <tr>
                            <td class="hidden-xs">Image</td>
                            <td>Product Name</td>
                            <td class="td-qty">Quantity</td>
                            <td>Unit Price</td>
                            <td>Sub Total</td>
                            <td>Remove</td>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="hidden-xs">
                                <a href="#">
                                    <img src="img/Office2016Thumb.jpg" alt="Office" title="" width="47" height="47" />
                                </a>
                            </td>
                            <td><a href="#">Office 2016</a>
                            </td>
                            <td>
                                <input type="text" name="" value="1" class="input-qty form-control text-center" />
                            </td>
                            <td class="price">$420</td>
                            <td>$420</td>
                            <td class="text-center">
                                <a href="#" class="remove_cart" rel="2">
                                    <i class="fa fa-trash-o"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="6" align="right">Total</td>
                            <td class="total" colspan="2"><b>$420</b>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="btn-group btns-cart">
                    <button type="button" class="btn btn-primary" onclick="window.location='catalogue.php'"><i class="fa fa-arrow-circle-left"></i> Continue Shopping</button>
                    <button type="button" class="btn btn-primary">Update Cart</button>
                    <button type="button" class="btn btn-primary" onclick="window.location='checkout.php'">Checkout <i class="fa fa-arrow-circle-right"></i></button>
                </div>

            </div>
        </div>
        <!-- End Cart -->


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
