<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="img/SWD Youtube2.png" type="image/x-icon">
    <!-- External CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css" />

    <noscript>
        <link rel="stylesheet" href="css/noscript.css" />
    </noscript>
    <title>VIT SW&D</title>
    <style>
        /*--------------------------------------------------------------
# Header
--------------------------------------------------------------*/
#header {
            height: 50px;
            /* position: fixed; */
            left: 0;
            top: 0;
            right: 0;
            transition: all 0.5s;
            z-index: 997;
        }

        /* #header.header-scrolled,
        #header.header-inner {
            background: #5D001E;
            height: 50px;
        } */

        #header #logo h1 {
            font-size: 36px;
            margin: 0;
            font-family: "Raleway", sans-serif;
            font-weight: 700;
            letter-spacing: 3px;
            text-transform: uppercase;
        }

        #header #logo h1 span {
            color: #c9df8a;
        }

        #header #logo h1 a,
        #header #logo h1 a:hover {
            color: rgb(0, 0, 0);
        }

        #header #logo img {
            padding: 0;
            margin: 0;
            max-height: 40px;
        }

        @media (max-width: 992px) {
            #header #logo img {
                max-height: 30px;
            }
        }

        /*--------------------------------------------------------------
# Navigation Menu
--------------------------------------------------------------*/
        /**
* Desktop Navigation 
*/
        .navbar {
            padding: 0;
        }

        .navbar ul {
            margin: 0;
            padding: 0;
            display: flex;
            list-style: none;
            align-items: center;
        }

        .navbar li {
            position: relative;
        }

        .navbar>ul>li {
            white-space: nowrap;
            padding: 10px 0 10px 12px;
        }

        .navbar a,
        .navbar a:focus {
            display: flex;
            align-items: center;
            justify-content: space-between;
            color: #234d20;
            font-family: "Raleway", sans-serif;
            font-weight: 600;
            font-size: 14px;
            white-space: nowrap;
            transition: 0.3s;
            position: relative;
            padding: 6px 4px;
        }

        .navbar a i,
        .navbar a:focus i {
            font-size: 12px;
            line-height: 0;
            margin-left: 5px;
        }

        .navbar>ul>li>a:before {
            content: "";
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -6px;
            left: 0;
            background-color: #c9df8a;
            visibility: hidden;
            transition: all 0.3s ease-in-out 0s;
        }

        .navbar a:hover:before,
        .navbar li:hover>a:before,
        .navbar .active:before {
            visibility: visible;
            width: 100%;
        }

        .navbar a:hover,
        .navbar .active,
        .navbar .active:focus,
        .navbar li:hover>a {
            color: #234d20;
        }


        .navbar .dropdown ul {
            display: block;
            position: absolute;
            left: 12px;
            top: calc(100% + 30px);
            margin: 0;
            padding: 10px 0;
            z-index: 99;
            opacity: 0;
            visibility: hidden;
            background: #fff;
            box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
            transition: 0.3s;
        }

        .navbar .dropdown ul li {
            min-width: 200px;
        }

        .navbar .dropdown ul a {
            padding: 10px 20px;
            font-size: 14px;
            text-transform: none;
            color: #234d20;
        }

        .navbar .dropdown ul a i {
            font-size: 12px;
        }

        .navbar .dropdown ul a:hover,
        .navbar .dropdown ul .active:hover,
        .navbar .dropdown ul li:hover>a {
            color: #c9df8a;
        }

        .navbar .dropdown:hover>ul {
            opacity: 1;
            top: 100%;
            visibility: visible;
        }

        .navbar .dropdown .dropdown ul {
            top: 0;
            left: calc(100% - 30px);
            visibility: hidden;
        }

        .navbar .dropdown .dropdown:hover>ul {
            opacity: 1;
            top: 0;
            left: 100%;
            visibility: visible;
        }

        @media (max-width: 1366px) {
            .navbar .dropdown .dropdown ul {
                left: -90%;
            }

            .navbar .dropdown .dropdown:hover>ul {
                left: -100%;
            }
        }

        /**
  * Mobile Navigation 
  */
        .mobile-nav-toggle {
            color: #fff;
            font-size: 28px;
            cursor: pointer;
            display: none;
            line-height: 0;
            transition: 0.5s;
        }

        @media (max-width: 991px) {
            .mobile-nav-toggle {
                display: block;
            }

            .navbar ul {
                display: none;
            }
        }

        .navbar-mobile {
            position: fixed;
            overflow: hidden;
            top: 0;
            right: 0;
            left: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.9);
            transition: 0.3s;
            z-index: 999;
        }

        .navbar-mobile .mobile-nav-toggle {
            position: absolute;
            top: 15px;
            right: 15px;
        }

        .navbar-mobile ul {
            display: block;
            position: absolute;
            top: 55px;
            right: 15px;
            bottom: 15px;
            left: 15px;
            padding: 10px 0;
            background-color: #fff;
            overflow-y: auto;
            transition: 0.3s;
        }

        .navbar-mobile>ul>li {
            padding: 0;
        }

        .navbar-mobile a:hover:before,
        .navbar-mobile li:hover>a:before,
        .navbar-mobile .active:before {
            visibility: hidden;
        }

        .navbar-mobile a,
        .navbar-mobile a:focus {
            padding: 10px 20px;
            font-size: 15px;
            color: #060c22;
        }

        .navbar-mobile a:hover,
        .navbar-mobile .active,
        .navbar-mobile li:hover>a {
            color: #c9df8a;
        }

        .navbar-mobile .getstarted,
        .navbar-mobile .getstarted:focus {
            margin: 15px;
        }

        .navbar-mobile .dropdown ul {
            position: static;
            display: none;
            margin: 10px 20px;
            padding: 10px 0;
            z-index: 99;
            opacity: 1;
            visibility: visible;
            background: #fff;
            box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
        }

        .navbar-mobile .dropdown ul li {
            min-width: 200px;
        }

        .navbar-mobile .dropdown ul a {
            padding: 10px 20px;
        }

        .navbar-mobile .dropdown ul a i {
            font-size: 12px;
        }

        .navbar-mobile .dropdown ul a:hover,
        .navbar-mobile .dropdown ul .active:hover,
        .navbar-mobile .dropdown ul li:hover>a {
            color: #c9df8a;
        }

        .navbar-mobile .dropdown>.dropdown-active {
            display: block;
        }
       /* End of footer */
       
        .playlist {
            text-decoration: none;
            color: white;
            font-weight: bold;
            font-size: 20px;
            position: relative;
            padding: 10px;
        }

        a.playlist.five:after {
            content: '';
            position: absolute;
            bottom: 0;
            right: 0;
            color: white;
            width: 0%;
            height: 100%;

            border-bottom: 2px solid white;

            transition: width 0.3s ease;
        }

        a.playlist.five:hover:after {
            left: 0;
            width: 100%;
            color: white;
            transition: width .3s ease;
        }

        .hover-img {
            background-color: #000;
            color: #fff;
            display: inline-block;
            margin: 8px;
            max-width: 95%;
            overflow: hidden;
            position: relative;
            text-align: center;
            width: 100%;
        }

        .hover-img * {
            box-sizing: border-box;
            transition: all 0.45s ease;
        }

        .hover-img:before,
        .hover-img:after {
            background-color: rgba(0, 0, 0, 0.5);
            border-top: 32px solid rgba(0, 0, 0, 0.5);
            border-bottom: 32px solid rgba(0, 0, 0, 0.5);
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            content: '';
            transition: all 0.3s ease;
            z-index: 1;
            opacity: 0;
            transform: scaleY(2);
        }

        .hover-img img {
            vertical-align: top;
            max-width: 100%;
            backface-visibility: hidden;
        }

        .hover-img figcaption {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            align-items: center;
            z-index: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            line-height: 1.1em;
            opacity: 0;
            z-index: 2;
            transition-delay: 0.1s;
            /*font-size: 24px;*/
            font-weight: 400;
            letter-spacing: 1px;
            /*text-transform: uppercase;*/
        }

        .hover-img:hover:before,
        .hover-img:hover:after {
            transform: scale(1);
            opacity: 1;
        }

        .hover-img:hover>img {
            opacity: 0.7;
        }

        .hover-img:hover figcaption {
            opacity: 1;
        }

        .hover14 section::before {
            position: absolute;
            top: 0;
            left: -75%;
            z-index: 2;
            display: block;
            content: '';
            width: 50%;
            height: 100%;
            background: -webkit-linear-gradient(left, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, .3) 100%);
            background: linear-gradient(to right, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, .3) 100%);
            -webkit-transform: skewX(-25deg);
            transform: skewX(-25deg);
        }

        .hover14 section:hover::before {
            -webkit-animation: shine 1.5s;
            animation: shine 1.5s;
        }

        @-webkit-keyframes shine {
            100% {
                left: 125%;
            }
        }

        @keyframes shine {
            100% {
                left: 125%;
            }
        }

        .button1 {
            display: inline-block;
            position: relative;
        }

        .button1 span {
            -webkit-transition: 0.6s;
            -moz-transition: 0.6s;
            -o-transition: 0.6s;
            transition: 0.6s;
            -webkit-transition-delay: 0.2s;
            -moz-transition-delay: 0.2s;
            -o-transition-delay: 0.2s;
            transition-delay: 0.2s;
        }

        .button1:before,
        .button1:after {
            content: '';
            position: absolute;
            top: 0em;
            left: 0;
            width: 100%;
            text-align: center;
            opacity: 0;
            -webkit-transition: .4s, opacity .6s;
            -moz-transition: .4s, opacity .6s;
            -o-transition: .4s, opacity .6s;
            transition: .4s, opacity .6s;
        }

        /* :before */

        .button1:before {
            content: attr(data-hover);
            -webkit-transform: translate(-150%, 0);
            -moz-transform: translate(-150%, 0);
            -ms-transform: translate(-150%, 0);
            -o-transform: translate(-150%, 0);
            transform: translate(-150%, 0);
        }

        /* :after */

        .button1:after {
            content: attr(data-active);
            -webkit-transform: translate(150%, 0);
            -moz-transform: translate(150%, 0);
            -ms-transform: translate(150%, 0);
            -o-transform: translate(150%, 0);
            transform: translate(150%, 0);
        }

        /* Span on :hover and :active */

        .button1:hover span,
        .button1:active span {
            opacity: 0;
            -webkit-transform: scale(0.3);
            -moz-transform: scale(0.3);
            -ms-transform: scale(0.3);
            -o-transform: scale(0.3);
            transform: scale(0.3);
        }

        /*  
    We show :before pseudo-element on :hover 
    and :after pseudo-element on :active 
*/

        .button1:hover:before,
        .button1:active:after {
            opacity: 1;
            -webkit-transform: translate(0, 0);
            -moz-transform: translate(0, 0);
            -ms-transform: translate(0, 0);
            -o-transform: translate(0, 0);
            transform: translate(0, 0);
            -webkit-transition-delay: .4s;
            -moz-transition-delay: .4s;
            -o-transition-delay: .4s;
            transition-delay: .4s;
        }

        /* 
  We hide :before pseudo-element on :active
*/

        .button1:active:before {
            -webkit-transform: translate(-150%, 0);
            -moz-transform: translate(-150%, 0);
            -ms-transform: translate(-150%, 0);
            -o-transform: translate(-150%, 0);
            transform: translate(-150%, 0);
            -webkit-transition-delay: 0s;
            -moz-transition-delay: 0s;
            -o-transition-delay: 0s;
            transition-delay: 0s;
        }


        .burger {
            display: none;
        }

        .nav-events:hover {
            font-size: 1.1rem;
            transform: skew(-2deg) translateX(-5%);
            transition: 0.3s;
        }

        .fs {
            font-size: 1.2rem;
        }

        .active {
            color: #234d20;
        }

        .burger div {
            width: 25px;
            height: 5px;
            background-color: black;
            margin: 5px;
            transition: all 0.3s ease;
        }

        @media screen and (max-width:760px) {
            body {
                overflow-x: hidden;
            }

            .events {
                font-size: 2vw;
            }

            .navs {
                position: absolute;
                right: 0px;
                left: opx;
                height: 96vh;
                top: 50px;
                background-color: #fdfce9;
                display: flex;
                flex-direction: column;
                align-items: center;
                width: 100%;
                font-size: 5vw;
                z-index: 3;
                transition: transform 0.5s ease-in;
                transform: translateX(100%);
            }

            .navs li {
                opacity: 0;
            }

            .burger {
                display: block;
                cursor: pointer;
            }

            .hidden {
                overflow: hidden;
            }


        }

        .nav-active {
            transform: translateX(0%);
        }

        @keyframes navLinkFade {
            from {
                opacity: 0;
                transform: translateX(50px);
            }

            to {
                opacity: 1;
                transform: translateX(0px);
            }
        }

        .toggle .line1 {
            transform: rotate(-45deg) translate(-8px, 6px);
            background-color: #234d20;
        }

        .toggle .line2 {
            opacity: 0;
        }

        .toggle .line3 {
            transform: rotate(45deg) translate(-8px, -6px);
            background-color: #234d20;
        }

        .footer2 {
            display: none;
        }

        @media screen and (max-width:760px) {
            body {
                overflow-x: hidden;
            }

            .footer1 {
                display: none;
            }

            .footer2 {
                display: inline;
            }

            .nav-events:hover {
                font-size: 2.2rem;
                transition: 0.3s;
            }

        }

        /*--------------------------------------------------------------
# Footer
--------------------------------------------------------------*/
        #footer {
            background: #234d20;
            padding: 0 0 25px 0;
            color: #eee;
            font-size: 14px;
        }

        #footer .footer-top {
            background: #040919;
            padding: 60px 0 30px 0;
        }

        #footer .footer-top .footer-info {
            margin-bottom: 30px;
        }

        #footer .footer-top .footer-info h3 {
            font-size: 26px;
            margin: 0 0 20px 0;
            padding: 2px 0 2px 0;
            line-height: 1;
            font-family: "Raleway", sans-serif;
            font-weight: 700;
            color: #fff;
        }

        #footer .footer-top .footer-info img {
            height: 40px;
            margin-bottom: 10px;
        }

        #footer .footer-top .footer-info p {
            font-size: 14px;
            line-height: 24px;
            margin-bottom: 0;
            font-family: "Raleway", sans-serif;
            color: #fff;
        }

        #footer .footer-top .social-links a {
            display: inline-block;
            background: #222636;
            color: #eee;
            line-height: 1;
            margin-right: 4px;
            border-radius: 50%;
            width: 36px;
            height: 36px;
            transition: 0.3s;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }

        #footer .footer-top .social-links a i {
            line-height: 0;
            font-size: 16px;
        }

        #footer .footer-top .social-links a:hover {
            background: #c9df8a;
            color: #fff;
        }

        #footer .footer-top h4 {
            font-size: 14px;
            font-weight: bold;
            color: #fff;
            text-transform: uppercase;
            position: relative;
            padding-bottom: 12px;
            border-bottom: 2px solid #c9df8a;
        }

        #footer .footer-top .footer-links {
            margin-bottom: 30px;
        }

        #footer .footer-top .footer-links ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        #footer .footer-top .footer-links ul i {
            padding-right: 5px;
            color: #c9df8a;
            font-size: 18px;
        }

        #footer .footer-top .footer-links ul li {
            border-bottom: 1px solid #262c44;
            padding: 10px 0;
        }

        #footer .footer-top .footer-links ul li:first-child {
            padding-top: 0;
        }

        #footer .footer-top .footer-links ul a {
            color: #eee;
        }

        #footer .footer-top .footer-links ul a:hover {
            color: #c9df8a;
        }

        #footer .footer-top .footer-contact {
            margin-bottom: 30px;
        }

        #footer .footer-top .footer-contact p {
            line-height: 26px;
        }

        #footer .footer-top .footer-newsletter {
            margin-bottom: 30px;
        }

        #footer .footer-top .footer-newsletter input[type=email] {
            border: 0;
            padding: 6px 8px;
            width: 65%;
        }

        #footer .footer-top .footer-newsletter input[type=submit] {
            background: #c9df8a;
            border: 0;
            width: 35%;
            padding: 6px 0;
            text-align: center;
            color: #fff;
            transition: 0.3s;
            cursor: pointer;
        }

        #footer .footer-top .footer-newsletter input[type=submit]:hover {
            background: #c9df8a;
        }

        #footer .copyright {
            background: #234d20;
            text-align: center;
            padding-top: 30px;
        }

        #footer .credits {
            text-align: center;
            font-size: 13px;
            color: #ddd;
        }
        
        /* .iframe-navbar{
            height:60px;
            width:98vw;
            overflow-y: hidden;
            border: none;
        } */
    </style>
</head>

<body class="hover14 body" style="background-color: #f4f7f6">
    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center " style="background-color: #fff;">
        <div class="container-fluid container-xxl d-flex align-items-center">

            <div id="logo" class="me-auto">
                <a href="#" class="scrollto"><img src="./img/swdlogo3.png" alt="" title=""></a>
            </div>

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto active" href="#">Home</a></li>
                    <li class="dropdown"><a href="#"
                        style="text-decoration: none;"><span>Our Team</span> <i
                            class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="./team/team_2021/index.html"
                                style="text-decoration: none;">Team 2021</a></li>
                        <li><a href="./team/team_2022/index.html" style="text-decoration: none;">Team 2022</a></li>
                        <li><a href="./team/team_2023/index.html" style="text-decoration: none;">Team 2023</a></li>
                        <li><a href="./team/team_2024/index.html" style="text-decoration: none;">Team 2024</a></li>

                    </ul>
                </li>
                    <li class="dropdown"><a href="./flagship/flagship.html" style="text-decoration: none;"><span>Flagship Events</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="./flagship/aatmabodh/aatmabodh.html" style="text-decoration: none;">Aatmabodh</a></li>
                            <li><a href="./flagship/rr/rr.html" style="text-decoration: none;">Rejuvenating Rashtra</a></li>
                            <li><a href="./flagship/utkrash/utkarsh.html" style="text-decoration: none;">Utkarsh</a></li>
                            <li><a href="./flagship/blood-d/blood.html" style="text-decoration: none;">Blood-d</a></li>
                            <li><a href="./flagship/miatre/miatre.html" style="text-decoration: none;">Mi Atre Boltoy</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#"
                            style="text-decoration: none;"><span>Publications</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="./magazine/index.html" style="text-decoration: none;">Magazine</a></li>
                            <li><a href="./News/index.html" style="text-decoration: none;">News</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="./GP2/index.php">GP2 Activities</a></li>
                    <li><a class="nav-link scrollto" href="./nss/nss.html">NSS</a></li>
                    <li><a class="nav-link scrollto" href="./Calender/cal.html">Wheel of Events</a></li>
                    <!-- <li><a class="nav-link scrollto" href="./Image Gallery/index.html">Our Best Times</a></li> -->
                </ul>
                <i class="bi bi-list mobile-nav-toggle" style="color: #234d20;"></i>
            </nav>
            <div id="logo" class="ms-auto">
                <a href="#" class="scrollto"><img src="./img/logo-vit-1.png" alt="" title=""></a>
            </div>
        </div>
    </header>
    <!-- <iframe class="iframe-navbar" src="NavbarNew/index.html" style="border: none"></iframe> -->
    <!-- End Header -->

    <!-- who we are -->
    <section class="banner style1 orient-left content-align-left image-position-right fullscreen onload-image-fade-in onload-content-fade-right">
        <div class="content">
            <h2>WHO ARE WE</h2>
            <p class="major text">We at the Social Welfare & Development Committee, readily work with a motto to
                empower
                society and transform lives to bring out the positive changes in the society. We aim to be a helping
                hand towards everyone in society by organizing various events and activities throughout the year. Main
                strength of our committee lies in equality and unity amongst every member. We are always ready to do
                someone a good turn to be good for society with no expectations in return.</p>
            <div class="container-fluid my-4">
                <a class="button" href="team/index.html" role="button"><span style="text-transform: uppercase; font-weight: bold;">Meet the Team</span></a>
            </div>
        </div>
        <div class="image">
            <img src="img/who.png" alt="" />
        </div>
    </section>

    <section class="spotlight style1 orient-right content-align-left image-position-center onscroll-image-fade-in" id="first" style="background-color: #234d20;">
        <div class="content" style="color: white;">
            <h2 style="color: white;">OUR PROMISE</h2>
            <p>At SW&D, we promise to create a safe-space where people, who share our objective, can express themselves
                freely and work together as a team. We promise to work with vigour and diligence to ameliorate society
                through a myriad of activities. We also vow to utilize our platform to inculcate social values and
                helpful nature amongst people and move one step closer to achieving our ultimate goal-sustainable
                development.</p>
        </div>
        <div class="image">
            <figure><img src="img/pro.jpg" alt="" /></figure>
        </div>
    </section>

    <!-- Three -->
    <section class="spotlight style1 orient-left content-align-left image-position-center onscroll-image-fade-in" style="background-color: #234d20;">
        <div class="content" style="color: white;">
            <h2 style="color: white;">OUR MISSION</h2>
            <p>To formulate, implement, and coordinate policies and programs for the needs and welfare of poor and needy
                people, as well as to provide quality social services to help them in the face of challenges in life. We
                promote social and family responsibilities in order to develop individual potential, empower, and build
                a team that is innovative, cohesive, and professional.</p>
        </div>
        <div class="image">
            <figure><img src="img/garbage.jfif" alt="" /></figure>
        </div>
    </section>
    <!-- GP2-->
    <section class="spotlight style1 orient-right content-align-left image-position-center onscroll-image-fade-in" id="first">
        <div class="content">
            <h2>EXPLORE GP2</h2>
            <p>At SW&D, we promise to create a safe-space where people, who share our objective, can express themselves
                freely and work together as a team. We promise to work with vigour and diligence to ameliorate society
                through a myriad of activities. We also vow to utilize our platform to inculcate social values and
                helpful nature amongst people and move one step closer to achieving our ultimate goal-sustainable
                development.</p>
            <div class="container-fluid my-4">
                <a class="button" href="GP2/index.php" role="button"><span style="text-transform: uppercase; font-weight: bold;">Know More</span></a>
            </div>
        </div>
        <div class="image">
            <figure><img src="img/gp2.jpg" alt="" /></figure>
        </div>
    </section>

    <!-- Flagship-->
    <section class="spotlight style1 orient-left content-align-left image-position-center onscroll-image-fade-in">
        <div class="content">
            <h2>CONNECT WITH FLAGSHIP EVENTS</h2>
            <p>To formulate, implement, and coordinate policies and programs for the needs and welfare of poor and needy
                people, as well as to provide quality social services to help them in the face of challenges in life. We
                promote social and family responsibilities in order to develop individual potential, empower, and build
                a team that is innovative, cohesive, and professional.</p>
            <div class="container-fluid my-4">
                <a class="button" href="flagship/flagship.html" role="button"><span style="text-transform: uppercase; font-weight: bold;">Know More</span></a>
            </div>
        </div>

        <div class="image">
            <figure><img src="img/slider.jpg" alt="" /></figure>
        </div>
    </section>
    <br>
    <br>

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-info">
                        <img src="img/swdlogo3.png" alt="Logo">
                        <p>Social Welfare and Development Committee with the motto of "Empowering Society, Transforming Lives" has
                            been helping society for several years and continues to do so in any circumstance.
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="./index.php" style="text-decoration: none;">Home</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="./team/team_2024/index.html" style="text-decoration: none;">Our Team</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="./Calender/cal.html" style="text-decoration: none;">Event Schedule</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="./flagship/flagship.html" style="text-decoration: none;">Flagship Events</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="./GP2/index.php" style="text-decoration: none;">GP2 Activities</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="./nss/nss.html" style="text-decoration: none;">NSS</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Flagship</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="./flagship/aatmabodh/aatmabodh.html" style="text-decoration: none;">AATMABODH</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="./flagship/rr/rr.html" style="text-decoration: none;">REJUVENATING RASHTRA</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="./flagship/utkrash/utkarsh.html" style="text-decoration: none;">UTKARSH</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="./flagship/miatre/miatre.html" style="text-decoration: none;">MI ATRE BOLTOY</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="./flagship/blood-d/blood.html" style="text-decoration: none;">BLOOD-D</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h4>Contact Us</h4>
                        <p>
                            <b style="color:white">Social Welfare & Development</b><br>
                            Vishwakarma Institute of Technology<br>
                            666, Upper Indiranagar, Bibwewadi, <br>
                            Pune - 411 037 <br>
                            <strong style="color:white">Phone:</strong> +91 98239 05061 / +91 82752 93813 <br>
                            <strong style="color:white">Email:</strong> vitswd@vit.edu<br>
                        </p>

                        <div class="social-links">
                            <a href="https://twitter.com/vit_socials" target="_blank" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="https://www.facebook.com/vitsocials" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="https://www.instagram.com/vitsocials/" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="https://www.youtube.com/channel/UCJnaNm8Ns08rUIhsdFM2fhA" target="_blank" class="google-plus"><i class="bi bi-youtube"></i></a>
                            <a href="https://www.linkedin.com/company/vit-social-welfare-development/" target="_blank" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                &copy; 2021-22 Social Welfare & Development Committee, VIT Pune.
            </div>
        </div>
    </footer><!-- End  Footer -->


    <!-- External JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="../js/homepage.js"></script>

    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.scrollex.min.js"></script>
    <script src="js/jquery.scrolly.min.js"></script>
    <script src="js/browser.min.js"></script>
    <script src="js/breakpoints.min.js"></script>
    <script src="js/util.js"></script>
    <script src="js/main.js"></script>

    <script>
        /**
         * Easy selector helper function
         */
        const select = (el, all = false) => {
            el = el.trim()
            if (all) {
                return [...document.querySelectorAll(el)]
            } else {
                return document.querySelector(el)
            }
        }

        /**
         * Easy event listener function
         */
        const on = (type, el, listener, all = false) => {
            let selectEl = select(el, all)
            if (selectEl) {
                if (all) {
                    selectEl.forEach(e => e.addEventListener(type, listener))
                } else {
                    selectEl.addEventListener(type, listener)
                }
            }
        }

        /**
         * Easy on scroll event listener 
         */
        const onscroll = (el, listener) => {
            el.addEventListener('scroll', listener)
        }

        /**
         * Navbar links active state on scroll
         */
        let navbarlinks = select('#navbar .scrollto', true)
        const navbarlinksActive = () => {
            let position = window.scrollY + 200
            navbarlinks.forEach(navbarlink => {
                if (!navbarlink.hash) return
                let section = select(navbarlink.hash)
                if (!section) return
                if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
                    navbarlink.classList.add('active')
                } else {
                    navbarlink.classList.remove('active')
                }
            })
        }
        window.addEventListener('load', navbarlinksActive)
        onscroll(document, navbarlinksActive)
        /**
         * Toggle .header-scrolled class to #header when page is scrolled
         */
        let selectHeader = select('#header')
        if (selectHeader) {
            const headerScrolled = () => {
                if (window.scrollY > 100) {
                    selectHeader.classList.add('header-scrolled')
                } else {
                    selectHeader.classList.remove('header-scrolled')
                }
            }
            window.addEventListener('load', headerScrolled)
            onscroll(document, headerScrolled)
        }
        /**
         * Mobile nav toggle
         */
        on('click', '.mobile-nav-toggle', function(e) {
            select('#navbar').classList.toggle('navbar-mobile')
            this.classList.toggle('bi-list')
            this.classList.toggle('bi-x')
        })

        /**
         * Mobile nav dropdowns activate
         */
        on('click', '.navbar .dropdown > a', function(e) {
            if (select('#navbar').classList.contains('navbar-mobile')) {
                e.preventDefault()
                this.nextElementSibling.classList.toggle('dropdown-active')
            }
        }, true)

        /**
         * Scrool with ofset on links with a class name .scrollto
         */
        on('click', '.scrollto', function(e) {
            if (select(this.hash)) {
                e.preventDefault()

                let navbar = select('#navbar')
                if (navbar.classList.contains('navbar-mobile')) {
                    navbar.classList.remove('navbar-mobile')
                    let navbarToggle = select('.mobile-nav-toggle')
                    navbarToggle.classList.toggle('bi-list')
                    navbarToggle.classList.toggle('bi-x')
                }
                scrollto(this.hash)
            }
        }, true)

        /**
         * Scroll with ofset on page load with hash links in the url
         */
        window.addEventListener('load', () => {
            if (window.location.hash) {
                if (select(window.location.hash)) {
                    scrollto(window.location.hash)
                }
            }
        });
    </script>
</body>

</html>