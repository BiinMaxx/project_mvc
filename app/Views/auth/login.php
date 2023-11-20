<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from landing.engotheme.com/html/skyline/demo/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Nov 2023 16:09:23 GMT -->
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <!-- CSS LIBRARY -->
    <link rel="stylesheet" type="text/css" href="<?= BASE_URL ?>ok/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?= BASE_URL ?>ok/css/ionicons.min.css">
    <link rel="stylesheet" type="text/css" href="<?= BASE_URL ?>ok/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="<?= BASE_URL ?>ok/css/gallery.css">
    <link rel="stylesheet" type="text/css" href="<?= BASE_URL ?>ok/css/vit-gallery.css">
    <link rel="shortcut icon" type="text/css" href="<?= BASE_URL ?>ok/images/favicon.png" />
    <link rel="stylesheet" type="text/css" href="<?= BASE_URL ?>ok/css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="<?= BASE_URL ?>ok/cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.css" />
    <!-- MAIN STYLE -->
    <link rel="stylesheet" href="<?= BASE_URL ?>ok/css/styles.css">
</head>

<body>
    <!-- HEADER -->
    <header class="header-sky">
        <div class="container">
            <!--HEADER-TOP-->
            <div class="header-top no-border">
                <div class="header-top-left">
                    <span><i class="ion-android-cloud-outline"></i>18 °C</span>
                    <span><i class="ion-ios-location-outline"></i> 121 King Str, Melbourne Victoria</span>
                    <span><i class="fa fa-phone" aria-hidden="true"></i> 1-548-854-8898</span>
                </div>
                <div class="header-top-right">
                    <ul>
                        <li class="dropdown"><a href="login.php" title="Login" class="dropdown-toggle">LOGIN</a></li>
                        <li class="dropdown"><a href="../register/header.php" title="Register" class="dropdown-toggle">REGISTER</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">USD <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li class="active"><a href="#">USD</a></li>
                                <li><a href="#">EUR</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">ENG <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li class="active"><a href="#">ENG</a></li>
                                <li><a href="#">JP</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- END/HEADER-TOP -->
        </div>
        <!-- MENU-HEADER -->
        <div class="menu-header ">
            <nav class="navbar navbar-fixed-top bg-menu">
                <div class="container">
                    <div class="navbar-header ">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar "></span>
                            <span class="icon-bar "></span>
                            <span class="icon-bar "></span>
                        </button>
                        <a class="navbar-brand" href="index.html" title="Skyline"><img src="<?= BASE_URL ?>ok/images/Home-1/sky-logo-header.png" alt="#"></a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown ">
                                <a href="index.html" title="Home" class="dropdown-toggle" data-toggle="dropdown">Home<b class="caret"></b></a>
                                <ul class="dropdown-menu icon-fa-caret-up submenu-hover">
                                    <li><a href="index.html" title="">Home 1</a></li>
                                    <li><a href="index_2.html" title="">Home 2</a></li>
                                    <li><a href="index_3.html" title="">Home 3</a></li>
                                    <li><a href="index_4.html" title="">Home 4</a></li>
                                </ul>
                            </li>
                            <li class="dropdown ">
                                <a href="room_1.html" title="Room & Rate" class="dropdown-toggle" data-toggle="dropdown">Room & Rate<b class="caret"></b></a>
                                <ul class="dropdown-menu icon-fa-caret-up submenu-hover">
                                    <li><a href="room_1.html" title="">Room 1</a></li>
                                    <li><a href="room_2.html" title="">Room 2</a></li>
                                    <li><a href="room_3.html" title="">Room 3</a></li>
                                    <li><a href="room_4.html" title="">Room 4</a></li>
                                    <li><a href="room_5.html" title="">Room 5</a></li>
                                    <li><a href="room_6.html" title="">Room 6</a></li>
                                    <li><a href="room_detail.html" title="">Room Detail</a></li>
                                </ul>
                            </li>
                            <li class="dropdown ">
                                <a href="#" title="  Page" class="dropdown-toggle" data-toggle="dropdown">Page<b class="caret"></b></a>
                                <ul class="dropdown-menu icon-fa-caret-up submenu-hover">
                                    <li><a href="guestbook.html" title="">Guest Book</a></li>
                                    <li class="submenu-hover1">
                                        <a href="event_page_1.html" class="dropdown-toggle" data-toggle="dropdown">Events <b class="caret"></b></a>
                                        <ul class="dropdown-menu dropdown-margin">
                                            <li><a href="event_page_1.html">Events </a></li>
                                            <li><a href="event_page_2.html">Events Fullwidth</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="attractions.html" title="">Attractions</a></li>
                                    <li class="submenu-hover1">
                                        <a href="blog.html" class="dropdown-toggle" data-toggle="dropdown">Blog <b class="caret"></b></a>
                                        <ul class="dropdown-menu dropdown-margin">
                                            <li><a href="blog.html">Blog </a></li>
                                            <li><a href="blog_detail.html">Blog Detail</a></li>
                                        </ul>
                                    </li>
                                    <li class="submenu-hover1">
                                        <a href="restaurant_1.html" class="dropdown-toggle" data-toggle="dropdown">Restaurant <b class="caret"></b></a>
                                        <ul class="dropdown-menu dropdown-margin">
                                            <li><a href="restaurant_1.html">Restaurant 1</a></li>
                                            <li><a href="restaurant_2.html">Restaurant 2</a></li>
                                            <li><a href="restaurant_3.html">Restaurant 3</a></li>
                                            <li><a href="restaurant_4.html">Restaurant 4</a></li>
                                        </ul>
                                    </li>
                                    <li class="submenu-hover1">
                                        <a href="tems_condition_1.html" class="dropdown-toggle" data-toggle="dropdown">Tems Condition  <b class="caret"></b></a>
                                        <ul class="dropdown-menu dropdown-margin">
                                            <li><a href="tems_condition_1.html">Tems Condition  1</a></li>
                                            <li><a href="tems_condition_2.html">Tems Condition  2</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="404_page.html" title="">404 Page</a></li>
                                    <li><a href="comming_soon.html" title="">Comming Soon</a></li>
                                    <li><a href="check_out.html" title="">Check Out</a></li>
                                </ul>
                            </li>
                            <li class="dropdown ">
                                <a href="reservation_1.html" title="Reservation" class="dropdown-toggle" data-toggle="dropdown">RESERVATION<b class="caret"></b></a>
                                <ul class="dropdown-menu icon-fa-caret-up submenu-hover">
                                    <li><a href="reservation_1.html" title="">Reservation 1</a></li>
                                    <li><a href="reservation_2.html" title="">Reservation 2</a></li>
                                    <li><a href="reservation_3.html" title="">Reservation 3</a></li>
                                    <li><a href="reservation_4.html" title="">Reservation 4</a></li>
                                    <li><a href="reservation_5.html" title="">Reservation 5</a></li>
                                </ul>
                            </li>
                            <li class="dropdown ">
                                <a href="gallery_1.html" title="Gallery" class="dropdown-toggle" data-toggle="dropdown">Gallery <b class="caret"></b></a>
                                <ul class="dropdown-menu icon-fa-caret-up submenu-hover">
                                    <li><a href="gallery_1.html" title="">Gallery 1</a></li>
                                    <li><a href="gallery_2.html" title="">Gallery 2</a></li>
                                    <li><a href="gallery_3.html" title="">Gallery 3</a></li>
                                </ul>
                            </li>
                            <li><a href="about.html" title="About">About</a></li>
                            <li><a href="contact.html" title="Contact">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <!-- END / MENU-HEADER -->
    </header>
    <!-- END-HEADER -->
   
    <?php
    include 'home.php';
        include 'footer.php';
    ?>
