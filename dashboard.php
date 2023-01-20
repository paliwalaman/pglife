<!DOCTYPE html>
<html lang="en">
<?php session_start();  ?>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard | PG Life</title>

    <!-- <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet" />
    <link href="css/common.css" rel="stylesheet" /> -->
    <?php
     include "includes/head_links.php";
     ?>
    <link href="css/mydashboard.css" rel="stylesheet" />
</head>

<body>
    <?php
     include "includes/header.php";
     ?>

    <!-- <div class="header sticky-top">
        <nav class="navbar navbar-expand-md navbar-light">
            <a class="navbar-brand" href="index.html">
                <img src="img/logo.png" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#my-navbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="my-navbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#signup-modal">
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

    <div id="loading">
    </div>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb py-2">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                Dashboard
            </li>
        </ol>
    </nav>
    <div class="outerbox">
        <h2>My Profile</h2>
        <div>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSTb8BlqSdIUw4FHxjvv1-q0o1L80gVBEYTKVnUr7g-vHvJGsdH-51TlaTd6qyP_qMNE1I&usqp=CAU" alt="" style="margin-right:10px; height:150px;width:150px;">
            <div class="detail">
                <B><?php echo $_SESSION['full_name']; ?></B>
                <p style="margin:auto"><?php echo $_SESSION['email']; ?></p>
                <p><?php echo $_SESSION['college_name']; ?></p>
            </div>
            <a href="#" id="edit_opt"><u>Edit Profile</u></a>
        </div>
    </div>
    
    <!-- <div class="footer">
        <div class="page-container footer-container">
            <div class="footer-cities">
                <div class="footer-city">
                    <a href="property_list.html">PG in Delhi</a>
                </div>
                <div class="footer-city">
                    <a href="property_list.html">PG in Mumbai</a>
                </div>
                <div class="footer-city">
                    <a href="property_list.html">PG in Bangalore</a>
                </div>
                <div class="footer-city">
                    <a href="property_list.html">PG in Hyderabad</a>
                </div>
            </div>
            <div class="footer-copyright">© 2020 Copyright PG Life </div>
        </div>
    </div>

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script> -->
    <?php
     include "includes/footer.php";
     ?>
</body>
