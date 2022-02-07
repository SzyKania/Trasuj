<?php
session_start();
if(!isset($_SESSION["userid"])){
    header("location: ../login");
}
?>

<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="/public/css/navbars.css">
    <link rel="stylesheet" type="text/css" href="/public/css/favourites.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <script type="text/javascript" src="/public/js/logout.js" defer></script>
    <title>FAVOURITES PAGE</title>
</head>

<body>
    <div class="sidenav">
        <div class="sidelogobox">
            <img class="sidelogo" src="/public/img/logo.svg" alt="logo">
        </div>
        <div class="sidebuttons">
            <a href="routes">ROUTES</a>
            <a href="#" id="current">FAVOURITES</a>
            <a href="users">USERS</a>
            <a href='profile?id=<?= $_SESSION["userid"] ?>'>MY PROFILE</a>
            <a href="#" id="logout">LOGOUT</a>
        </div>
    </div>
    <div class="topnav">
        <input  class="searchbar" name="searchbar" type="search" placeholder="BROWSE ROUTES">
    </div>
    <div class="main">
        <div class="content-box">
            <?php if (!empty($routes)) {
                foreach ($routes as $route): ?>
                    <div class="content-item">
                        <div class="text-box" id="miasto">
                            <p><?=$route->getCity()?></p>
                            <p>Road type:<?=$route->getRoadtype()?></p>
                            <p>Last visit:</p>
                        </div>
                        <div class="text-box">
                            <p><?=$route->getTitle()?></p>
                        </div>
                        <div class="picture-box">
                            <img class="picture" src="/public/uploads/<?= $route->getImage() ?>" alt="projectphoto">
                        </div>
                    </div>
                <?php endforeach;
            } ?>
<!--example, not finished-->
            <div class="content-item">
                <div class="text-box" id="miasto">
                    <p>BIELSKO-BIALA</p>
                    <p>Road type:</p>
                    <p>Last visit:</p>
                </div>
                <div class="text-box">
                    <p>Trasa na Szyndzielni</p>
                    <p>Best time:</p>
                    <p>Often with:</p>
                </div>
                <div class="picture-box">
                    <img class="picture" src="/public/uploads/przypinka1.png" alt="projectphoto">
                </div>
            </div>
        </div>
    </div>
</body>