<?php
require("functions.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zodiac Zone</title>
    <link rel="icon" type="image/x-icon" href="assets/images/logo2.png" />
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
    <!-- fontawesome css link -->
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <!-- flaticon css -->
    <link rel="stylesheet" href="assets/font/flaticon.css">
    <!-- magnific popup -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- nice-select css -->
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <!-- bootstrap css link -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- swipper css link -->
    <link rel="stylesheet" href="assets/css/swiper.min.css">
    <!-- favicon -->
    <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
    <!-- odometer css -->
    <link rel="stylesheet" href="assets/css/odometer.css">
    <!-- animate.css -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- main style css link -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        * {
            font-family: 'Comfortaa', cursive;
        }

        .dropdown-menu {
            position: absolute;
            top: 100%;
            left: 0;
            z-index: 1000;
            display: none;
            float: left;
            min-width: 10rem;
            padding: 0.5rem 11px;
            margin: .125rem 0 0;
            font-size: 1rem;
            color: #212529;
            text-align: left;
            list-style: none;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid rgba(0, 0, 0, .15);
            border-radius: .25rem;
        }

        .card-body svg {
            width: 100%;
        }

        body {
            background: linear-gradient(45deg, #FF64B4, #FF8C4D, #FF64B4, #FF8C4D);
            background-size: 400% 400%;
            -webkit-animation: gradient 15s ease infinite;
            animation: gradient 15s ease infinite;
        }

        @-webkit-keyframes gradient {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        .box-shadow {
            box-shadow: -15px -15px 25px #FFFFFF;
        }

        .counter-item,
        .counter-item-two {
            background-color: #ffff;
        }

        .bg-white-smoke {
            background-color: #ffffff;
        }

        .mb-6 {
            margin-bottom: 10px;
        }

        .banner-content {
            font-family: 'Comfortaa', cursive;
        }

        .jumbotron {

            background-color: #ffffff;

        }

        .aim-item {
            text-align: justify;
        }

        .custome-button {
            background: transparent linear-gradient(90deg, #fff 0%, #fff 100%) 0% 0% no-repeat padding-box;
            color: #0000;
            font-size: 20px;
            font-weight: bold;
            letter-spacing: 0.07em;
            text-shadow: 1px 1px 0 #fff;
            padding: 8px 20px;
            border: 0;
            border-radius: 30px;
            box-shadow: 15px 15px 25px #00000026;
        }

        .custome-button:hover {
            box-shadow: -2px -2px 5px #FFF, 2px 2px 5px #BABECC;
        }

        .custome-button:active {
            box-shadow: inset 2px 2px 3px #BABECC, inset -2px -2px 3px #FFF;
        }

        .main-menu {
            align-items: center;
        }

        .pd-t-120 {
            padding-top: 140px;
        }

        .about-section .about-content-area {
        margin-left: 0;
            }
    </style>
</head>

<body>