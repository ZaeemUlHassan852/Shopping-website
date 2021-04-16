<?php
require('../Function/connection.php');
require('backcode.php');
require('../Function/function.php');
require('cartopr.php');

$obj=new add_to_cart();
$totalProduct=$obj->totalProduct();
?>
<?php
$cat = display_cat();
?>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home Heaven</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- All css files are included here. -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Owl Carousel min css -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="css/core.css">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="css/shortcode/shortcodes.css">
    <!-- Theme main style -->
    <link rel="stylesheet" href="style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- User style -->
    <link rel="stylesheet" href="check.css">



    <!-- Modernizr JS -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    
    <style>
        
    </style>
</head>

<body>
    <div class="wrapper">
        <header>
            <div>
                <div class="container">
                    <div class="row">
                        <div class="clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-5">
                                <div class="logo">
                                    <a href="index.php"><img src="hah.png"></a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-8 col-sm-5 col-xs-3">
                                <nav class="main__menu hidden-xs hidden-sm">
                                    <ul class="main__menu">
                                        <?php
                                        while($row=mysqli_fetch_assoc($cat)){
                                        ?>
                                        <li><a href="categories.php?id=<?php echo $row['id']?>"><?php echo $row['cat_name']?></a></li>
                                        <?php
                                        }
                                        ?>
                                    </ul>
                                </nav>
                            </div>
                            <div class="col-md-3 col-lg-2 col-sm-4 col-xs-4">
                                <div class="header__right">
                                    <div class="header__search search search__open">
                                        <a href="#"><i class="icon-magnifier icons"></i></a>
                                    </div>
                                    <div class="header__account">
                                            <?php 
                                                if(isset($_SESSION['user_login']))
                                                {
                                                    echo '<a href="logout.php">Logout</a>';
                                                }
                                                else
                                                {
                                                    echo '<a href="login.php"><i class="icon-user icons"></i></a>';
                                                }
                                            ?>
                                      <!--<a href="login.php"><i class="icon-user icons"></i></a>-->

                                    </div>
                                   |
                                    <div class="htc__shopping__cart">
                                        <a class="cart__menu" href="#"><i class="icon-handbag icons"></i></a>
                                        <a href="cart.php"><span class="htc__qua"><?php echo $totalProduct?></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <script src="js/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap framework js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All js plugins included in this file. -->
    <script src="js/plugins.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <!-- Waypoints.min.js. -->
    <script src="js/waypoints.min.js"></script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="js/custom.js"></script>
