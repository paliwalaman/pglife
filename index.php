<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home | PG Life</title>

    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet" />
    <link href="css/common.css" rel="stylesheet" />
    <link href="css/property_list.css" rel="stylesheet" />
     <?php
     include "includes/head_links.php";
     ?>
    <link href="css/myhome.css" rel="stylesheet" />
</head>

<body>
    <?php
     include "includes/header.php";
     ?>

    <!-- <div class="header sticky-top">
        <nav class="navbar navbar-expand-md navbar-light">
            <a class="navbar-brand" href="index.php">
                <img src="img/logo.png" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#my-navbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="my-navbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="" data-toggle="modal" data-target="#signup-modal">
                            <i class="fas fa-user"></i>Signup
                        </a>
                    </li>
                    <div class="nav-vl"></div>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#login-modal">
                            <i class="fas fa-sign-in-alt"></i>Login
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div> -->

    <div class="cen_p1">
        <img class="col-12" src="img\bg.png">
        <h3 class="slogan">Happiness per Square Foot</h3>
        <form class="searchdiv" id="search-form" action="Property_list.php" method="GET">
            <!-- <div class="input-group city-search"> --> <!-- ********** -->
                <input class="searchbox" type="text" id="city" name="city" placeholder="Enter your city to search for PGs">
                <!-- <div class="input-group-append"> --> <!-- ********** -->
                    <button class="search" type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                <!-- </div> --> <!-- ********** -->
            <!-- </div> --> <!-- ********** -->
        </form>
    </div>
    <h3 class="major">Major Cities</h3>
    <div class="majct">
        <div class="citybtn" style="display:inline-block"> <!-- ; border:solid red 2px -->
            <a  href="property_list.php?city=Delhi"><img class="city" src="img\delhi.png"></a>
        </div>
        <div class="citybtn" style="display:inline-block"> <!-- ; border:solid red 2px -->
            <a  href="property_list.php?city=Mumbai"><img class="city" src="img\mumbai.png"></a>
        </div>
        <div class="citybtn" style="display:inline-block"> <!-- ; border:solid red 2px -->
            <a  href="property_list.php?city=Bengaluru"><img class="city" src="img\bangalore.png"></a>
        </div>
        <div class="citybtn" style="display:inline-block">     <!-- ; border:solid red 2px -->
            <a  href="property_list.php?city=Hyderabad"><img class="city" src="img\hyderabad.png"></a>
        </div>
    </div>
    <br>

    <!-- <div class="footer">
        <div class="page-container footer-container">
            <div class="footer-cities">
                <div class="footer-city col-md">
                    <a href="property_list.php">PG in Delhi</a>
                </div>
                <div class="footer-city col-md">
                    <a href="property_list.php">PG in Mumbai</a>
                </div>
                <div class="footer-city col-md">
                    <a href="property_list.php">PG in Bangalore</a>
                </div>
                <div class="footer-city col-md">
                    <a href="property_list.php">PG in Hyderabad</a>
                </div>
            </div>
            <div class="footer-copyright">© 2020 Copyright PG Life </div>
        </div>
    </div>

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script> -->
    <?php
     include "includes/signup_modal.php";
     include "includes/login_modal.php";
     include "includes/footer.php";
     ?>

    <!-- </div><img src="img\images.png" alt="GO" style="width:25px; height:25px; padding:0px; border:0px; margin:0px;"> -->
</body>
</html>