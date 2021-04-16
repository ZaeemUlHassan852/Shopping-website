<?php 
session_start();
require('connection.php');
require('backcode.php');
require('../Function/function.php');
?>
<?php
$cat = display_cat();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Home a Heaven</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="css/core.css">

    <link rel="stylesheet" href="projectcss/pro9.css">

    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="css/responsive.css">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
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
                                        <a href="#"><i class="fas fa-search"></i></a>
                                    </div>
                                    <div class="header__account">
                                        <a href="login.php"><i class="far fa-user"></i></a>
                                    </div>
                                    <div class="htc__shopping__cart">
                                        <a href="cart.php"><i class="fas fa-cart-plus"></i></a>
                                        <a href="#"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    <section class="ptb--100 bg__white">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="contact-form-wrap mt--60">
                        <div class="col-xs-12">
                            <div class="contact-title">
                                <h2 class="title__line--6">Login Here</h2>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <form id="contact-form" action="#" method="post">
                                <div class="single-contact-form">
                                    <div class="contact-box name">
                                        <input type="text" name="username" placeholder="Your username here" style="width:100%">
                                    </div>
                                </div>
                                <div class="single-contact-form">
                                    <div class="contact-box name">
                                        <input type="password" name="password" placeholder="Your Password" style="width:100%">
                                    </div>
                                </div>

                                <div class="contact-btn">
                                    <button type="submit" class="fv-btn" name="login_user">Login</button>
                                </div>
                            </form>
                            <div class="form-output">
                                <p class="form-messege"></p>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="col-md-6">
                    <div class="contact-form-wrap mt--60">
                        <div class="col-xs-12">
                            <div class="contact-title">
                                <h2 class="title__line--6">Register Here</h2>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <form id="contact-form" action="#" method="post">
                                <div class="single-contact-form">
                                    <div class="contact-box name">
                                        <input type="text" name="username" placeholder="Username" style="width:100%">
                                    </div>
                                </div>
                                <div class="single-contact-form">
                                    <div class="contact-box name">
                                        <input type="text" name="email" placeholder="Your Email" style="width:100%">
                                    </div>
                                </div>
                                <div class="single-contact-form">
                                    <div class="contact-box name">
                                        <input type="password" name="password" placeholder="Your Password" style="width:100%">
                                    </div>
                                </div>
                                <div class="single-contact-form">
                                    <div class="contact-box name">
                                        <input type="text" name="contact" placeholder="Your Contact" style="width:100%">
                                    </div>
                                </div>
                                <div class="single-contact-form">
                                    <div class="contact-box name">
                                        <input type="text" name="address" placeholder="Your Address" style="width:100%">
                                    </div>
                                </div>

                                <div class="contact-btn">
                                    <button type="submit" class="fv-btn" name="reg_user">Register</button>
                                </div>
                            </form>
                            <div class="form-output">
                                <p class="form-messege"></p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
</body>

</html>
