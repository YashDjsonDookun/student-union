    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.light_blue-cyan.min.css" />
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script src="./assets/js/node_modules/waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="./assets/js/main.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
</head>
<body class="preload">
<div class="wrapper">
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <div class="top-contact">
            <div class="top-contact-content">
                <h4>Monday to Satuday, 8am to 6pm</h4>
                <h4>Call Us Now (+230) 5-777 7777</h4>
            </div>
        </div>
        <header class="mdl-layout__header" style="background-color: white">
            <div class="mdl-layout__header-row" style="height: 10vh;">
                <!-- Title -->
                <span class="mdl-layout-title" style="display: flex; align-items: center;"><div id="circle"></div><strong>University Of Mauritius</br>Student's Union</strong></span>
                <!-- Add spacer, to align navigation to the right -->
                <div class="mdl-layout-spacer"></div>
                <!-- Navigation. We hide it in small screens. -->
                <nav class="mdl-navigation mdl-layout--large-screen-only" id="navHome">
                    <a class="mdl-navigation__link" href="./" style="color: #429DD1" id="home">HOME</a>
                    <a class="mdl-navigation__link" href="" id="overview">OVERVIEW</a>
                    <a class="mdl-navigation__link" href="" id="ob">OFFICE-BEARERS</a>
                    <a class="mdl-navigation__link" href=""id="apply">APPLY NOW</a>
                </nav>
                <nav class="mdl-navigation mdl-layout--large-screen-only" id="navForum">
                    <a class="mdl-navigation__link" href="./" id="home">HOME</a>
                    <a class="mdl-navigation__link" href="./" style="color: #429DD1" id="home">FORUM</a>
                </nav>
            </div>
        </header>
        <div class="mdl-layout__drawer">
            <span class="mdl-layout-title"><u>STUDENT UNION</u></span>
            <nav class="mdl-navigation"id="navHome">
                <a class="mdl-navigation__link" href="./" style="color: #429DD1" id="home">HOME</a>
                <a class="mdl-navigation__link" href="" id="overview">OVERVIEW</a>
                <a class="mdl-navigation__link" href="" id="ob">OFFICE-BEARERS</a>
                <a class="mdl-navigation__link" href=""id="apply">APPLY NOW</a>
                <a class="mdl-navigation__link" href=""id="facRepNavLink">FACULTY REPRESENTATIVES</a>
                <a class="mdl-navigation__link" href=""id="reachUs">REACH US HERE</a>
                <a class="mdl-navigation__link" href="./forum.php" id="forum">FORUM</a>
            </nav>
            <nav class="mdl-navigation"id="navForum">
                <a class="mdl-navigation__link" href="./" id="home">HOME</a>
                <a class="mdl-navigation__link" href="./forum.php" style="color: #429DD1" id="forum">FORUM</a>
            </nav>
        </div>
<?php
    require_once("./assets/src/includes/classes/OfficeBearer.php");
    require_once("./assets/src/includes/classes/FacultyRep.php");
    require_once("./assets/src/includes/classes/Suggestions.php");
    require_once("./assets/src/includes/classes/Admin.php");
    require_once("./assets/src/includes/dialog.php");
    $President = new OfficeBearer($conn, "President");
    $Vpresident = new OfficeBearer($conn, "Vice-President");
    $Treasurer = new OfficeBearer($conn, "Treasurer");
    $Secretary = new OfficeBearer($conn, "Secretary");
?>
