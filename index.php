<?php include('check.php');
?>

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
                <li><a href="catalogus.php">Catalogue</a></li>
                <li><a href="cart.php">Shopping Cart</a></li>
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
<!-- End Navigation -->

<div class="container main-container">
    <div class="row">

        <!-- Slider -->
        <div class="col-lg-9 col-md-12">
            <div class="slider">
                <ul class="bxslider">
                    <li>
                        <a href="//PLACEHOLD.IT">
                            <img src="img/Banner-Bitdefender.png" alt=""/>
                        </a>
                    </li>
                    <li>
                        <a href="//PLACEHOLD.IT">
                            <img src="img/Banner-Bitdefender.png" alt=""/>
                        </a>
                    </li>
                    <li>
                        <a href="//PLACEHOLD.IT">
                            <img src="img/Banner-Bitdefender.png" alt=""/>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- End Slider -->

        <!-- Product Selection, visible only on large desktop -->
        <div class="col-lg-3 visible-lg">
            <div class="row text-center">
                <div class="col-lg-12 col-md-12 hero-feature">
                    <div class="thumbnail">
                        <a href="detail.php" class="link-p first-p">
                            <img src="img/Office2016Thumb.jpg" alt="">
                        </a>
                        <div class="caption prod-caption">
                            <h4><a href="detail.php">Placeholder</a></h4>
                            <p>Ik dacht zelf aan max 9 producten op de homepage, de naam+beschrijving+img+Prijs moet uit de detabees komen.</p>
                            <p>
                            <div class="btn-group">
                                <a href="#" class="btn btn-default">$420</a>
                                <a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy</a>
                            </div>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Product Selection -->
    </div>

    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-12">

            <!-- Categories -->
            <div class="col-lg-12 col-md-12 col-sm-6">
                    <div class="no-padding">
                        <span class="title">CATEGORIES</span>
                    </div>

                    <div id="main_menu">
                        <div class="list-group panel panel-cat">
                            <a href="#sub1" class="list-group-item" data-toggle="collapse" data-parent="#main_menu">Microsoft <i class="glyphicon glyphicon-menu-down"></i></a>
                            <div class="collapse list-group-sub" id="sub1">
                                <a href="javascript:;" class="list-group-item">Subitem 1</a>
                                <a href="javascript:;" class="list-group-item">Subitem 2</a>
                                <a href="javascript:;" class="list-group-item">Subitem 3</a>
                            </div>
                            <a href="#" class="list-group-item" >Apple</a>
                            <a href="#sub2" class="list-group-item" data-toggle="collapse" data-parent="#main_menu">Adobe <i class="glyphicon glyphicon-menu-down"></i></a>
                            <div class="collapse list-group-sub" id="sub2">
                                <a href="#" class="list-group-item">Subitem 1</a>
                                <a href="#" class="list-group-item">Subitem 2</a>
                                <a href="#" class="list-group-item">Subitem 3</a>
                            </div>
                            </br>
                            <a href="#" class="list-group-item" >Jetbrains</a>
                            <a href="#" class="list-group-item" >Signavio</a>
                            <a href="#" class="list-group-item" >Anti-Virus</a>
                            <a href="#" class="list-group-item" >Cloudservices</a>
                            <a href="#" class="list-group-item" >BackUp Software</a>
                            <a href="#" class="list-group-item" >Development</a>
                            <a href="#" class="list-group-item" >Statistics and research</a>
                        </div>
                    </div>

            </div>
            <!-- End Categories -->

            <!-- Best Seller -->
            <div class="col-lg-12 col-md-12 col-sm-6">
                <div class="no-padding">
                    <span class="title">BEST SELLER</span>
                </div>
                <div class="hero-feature">
                    <div class="thumbnail text-center">
                        <a href="detail.php" class="link-p">
                            <img src="img/Office2016Thumb.jpg" alt="">
                        </a>
                        <div class="caption prod-caption">
                            <h4><a href="detail.php">Office 2016</a></h4>
                            <p>Fantastische product beschrijving maar dan in het engels!</p>
                            <p>
                            <div class="btn-group">
                                <a href="#" class="btn btn-default">$ 528.96</a>
                                <a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy</a>
                            </div>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
            <!-- End Best Seller -->

        </div>

        <div class="clearfix visible-sm"></div>

        <!-- Recents -->
        <div class="col-lg-9 col-md-9 col-sm-12">
            <div class="col-lg-12 col-sm-12">
                <span class="title">RECENTLY ADDED</span>
            </div>
            <div class="col-lg-4 col-sm-4 hero-feature text-center">
                <div class="thumbnail">
                    <a href="detail.php" class="link-p">
                        <img src="img/Office2016Thumb.jpg" alt="">
                    </a>
                    <div class="caption prod-caption">
                        <h4><a href="detail.php">Office 2016</a></h4>
                        <p>Fantastische product beschrijving maar dan in het engels!</p>
                        <p>
                        <div class="btn-group">
                            <a href="#" class="btn btn-default">$ 122.51</a>
                            <a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy</a>
                        </div>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4 hero-feature text-center">
                <div class="thumbnail">
                    <a href="detail.php" class="link-p">
                        <img src="img/Office2016Thumb.jpg" alt="">
                    </a>
                    <div class="caption prod-caption">
                        <h4><a href="detail.php">Office 2016</a></h4>
                        <p>Fantastische product beschrijving maar dan in het engels!</p>
                        <p>
                        <div class="btn-group">
                            <a href="#" class="btn btn-default">$ 628.96</a>
                            <a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy</a>
                        </div>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4 hero-feature text-center">
                <div class="thumbnail">
                    <a href="detail.php" class="link-p">
                        <img src="img/Office2016Thumb.jpg" alt="">
                    </a>
                    <div class="caption prod-caption">
                        <h4><a href="detail.php">Office 2016</a></h4>
                        <p>Fantastische product beschrijving maar dan in het engels!</p>
                        <p>
                        <div class="btn-group">
                            <a href="#" class="btn btn-default">$ 394.64</a>
                            <a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy</a>
                        </div>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4 hero-feature text-center">
                <div class="thumbnail">
                    <a href="detail.php" class="link-p">
                        <img src="img/Office2016Thumb.jpg" alt="">
                    </a>
                    <div class="caption prod-caption">
                        <h4><a href="detail.php">Office 2016</a></h4>
                        <p>Fantastische product beschrijving maar dan in het engels!</p>
                        <p>
                        <div class="btn-group">
                            <a href="#" class="btn btn-default">$ 428.96</a>
                            <a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy</a>
                        </div>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4 hero-feature text-center">
                <div class="thumbnail">
                    <a href="detail.php" class="link-p">
                        <img src="img/Office2016Thumb.jpg" alt="">
                    </a>
                    <div class="caption prod-caption">
                        <h4><a href="detail.php">Office 2016</a></h4>
                        <p>Fantastische product beschrijving maar dan in het engels!</p>
                        <p>
                        <div class="btn-group">
                            <a href="#" class="btn btn-default">$ 428.96</a>
                            <a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy</a>
                        </div>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4 hero-feature text-center">
                <div class="thumbnail">
                    <a href="detail.php" class="link-p">
                        <img src="img/Office2016Thumb.jpg" alt="">
                    </a>
                    <div class="caption prod-caption">
                        <h4><a href="detail.php">Office 2016</a></h4>
                        <p>Fantastische product beschrijving maar dan in het engels!</p>
                        <p>
                        <div class="btn-group">
                            <a href="#" class="btn btn-default">$ 632.15</a>
                            <a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy</a>
                        </div>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Recents -->

        <div class="clearfix visible-sm"></div>



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