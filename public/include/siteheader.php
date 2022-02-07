<?php
session_start();
if(!isset($_SESSION["userid"])){
    header("location: ../login");
}
?>

<!DOCTYPE html>
<head>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/public/css/navbars.css">
    <link rel= "stylesheet" type="text/css" href = "/public/css/<?=$pagename?>.css">
    <script type="text/javascript" src="/public/js/logout.js" defer></script>

    <?php
    if($pagename === "profile"){
        ?>
        <script type="text/javascript" src="/public/js/follow.js" defer></script>
        <?php
    }
    else if($pagename === "routes"){
        ?>
        <script type="text/javascript" src="/public/js/search.js" defer></script>
    <?php
    }
    else if($pagename === "routedetails"){
    ?>
        <script type="text/javascript" src="/public/js/favourite.js" defer></script>
    <?php
    }?>
    <title><?=$pagename?></title>
</head>

<body>
<div class="sidenav">
    <div class="sidelogobox">
        <img class="sidelogo" src="/public/img/logo.svg" alt="logo">
    </div>
    <div class="sidebuttons">
        <a href="routes">ROUTES</a>
        <a href="favourites">FAVOURITES</a>
        <a href="users">USERS</a>
        <a href='profile?id=<?= $_SESSION["userid"] ?>'>MY PROFILE</a>
        <a href="#" id="logout">LOGOUT</a>
    </div>
</div>
<div class="topnav">
    <input class="searchbar" name="searchbar" type="search" placeholder="BROWSE ROUTES">
</div>