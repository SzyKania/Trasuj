<?php
session_start();
if(!isset($_SESSION["userid"])){
    header("location: ../login");
}
?>

<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="/public/css/navbars.css">
    <link rel="stylesheet" type="text/css" href="/public/css/friends.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <title>ROUTE DETAILS</title>
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
            <a href="#" id="current">FRIENDS</a>
            <a class = "settingsbutton" href="#">SETTINGS</a>
        </div>
    </div>
    <div class="topnav">
        <input  class="searchbar" name="searchbar" type="search" placeholder="BROWSE ROUTES">
        <button class="routesbutton">NEAR ROUTES</button>
    </div>
    <div class="main">
        <div class="grid-box">
            <div class="grid-item">
                <div class="picture-box">
                    <img class="photo" src="/public/img/nikiel.png">
                </div>
                <div class="description-box"> 
                    <p id="name">Michal Pikiel</p>
                    <p id="city">Katowice</p> 
                </div>
            </div>
            <div class="grid-item">
                <div class="picture-box">
                    <img class="photo" src="public/img/nikiel.png">
                </div>
                <div class="description-box"> 
                    <p id="name">Michal Pikiel</p>
                    <p id="city">Katowice</p> 
                </div>
            </div>
            <div class="grid-item">
                <div class="picture-box">
                    <img class="photo" src="public/img/nikiel.png">
                </div>
                <div class="description-box"> 
                    <p id="name">Michal Pikiel</p>
                    <p id="city">Katowice</p> 
                </div>
            </div>
            <div class="grid-item">
                <div class="picture-box">
                    <img class="photo" src="public/img/nikiel.png">
                </div>
                <div class="description-box"> 
                    <p id="name">Michal Pikiel</p>
                    <p id="city">Katowice</p> 
                </div>
            </div>
            
        </div>
    </div>
</body>

