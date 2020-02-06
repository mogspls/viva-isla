<?php
    include("inc/vivaisla.db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title><?php echo $pagetitle; ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php
        require("inc/functions.php");
        get_all_assets();
    ?>
</head>
<body>
    <header id="main-menu">
        <a href="home" style="display: flex; padding: 5px; height: 100%;">
            <img src="assets/img/logo.svg" alt="" height="50px">
        </a>
        <div id="hamburger">
            <span id="line-1"></span>
            <span id="line-2"></span>
            <span id="line-3"></span>
        </div>
        <nav>
            <div class="nav-wrapper">
                <ul>
                    <li class="current"><a href="about">ABOUT US</a></li>
                    <li><a href="services">SERVICES</a></li>
                    <li><a href="our-listings">OUR LISTINGS</a></li>
                    <li><a href="blog">BLOG</a></li>
                    <li><a href="contact-us">CONTACT US</a></li>
                </ul>
                <div id="search">
                    <input type="search" name="search" id="search" placeholder="Enter Keyword">
                </div>
            </div>
            <a href="#search" id="search"><i class="fa fa-search"></i></a>
        </nav>
        <div id="right" style="display: flex; flex: 1; justify-content: flex-end; flex-direction: row;">
            <div id="language">
                <img src="assets/img/icons/globe-solid.svg" alt="Language" style="height: 18px; padding: 3px">
                <select name="lang" id="lang">
                    <option value="en">English</option>
                    <option value="es">Español</option>
                    <option value="cn">中文(简体)</option>
                    <option value="heb">עברית</option>
                </select>
            </div>
            <div id="currency">
                <select name="curr" id="curr">
                    <option value="en">₱&nbsp;&nbsp;&nbsp;PHP</option>
                    <option value="es">$&nbsp;&nbsp;&nbsp;USD</option>
                </select>
            </div>
            <div id="call">
                <p style="padding: 5px 0px; font-size: 9px; font-weight: 400;"><i class="fa fa-phone" style="font-size: 15px;"></i>&nbsp; CALL US NOW</p>
                <p style="font-size: 10px"><strong style="font-weight: 500;">Globe: </strong><a href="tel: +63 926 061 8919">+63 926 061 8919</a></p>
            </div>
            <div id="chat">
                <i class="fa fa-comment"></i>
            </div>
            <img src="assets/img/brickell.png" alt="" height="60px">
        </div>
    </header>