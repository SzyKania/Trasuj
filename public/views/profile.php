<?php
session_start();
if(!isset($_SESSION["useremail"])){
    header("location: ../login");
}
?>

<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="/public/css/navbars.css">
    <link rel="stylesheet" type="text/css" href="/public/css/profile.css">
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
            <a href="users" id="current">USERS</a>
            <a href="friends">FRIENDS</a>
            <a class = "settingsbutton" href="#">SETTINGS</a>
        </div>
    </div>
    <div class="topnav">
        <input  class="searchbar" name="searchbar" type="search" placeholder="BROWSE ROUTES">
        <button class="routesbutton">NEAR ROUTES</button>
    </div>
    <div class="main">
        <div class="infoandroutes">
            <div class="info">
                <div class="imgcontainer">
                    <img src="/public/img/klaymen.png">
                </div>
                <div class="infotext">
                    <p>Klaymen</p>
                    <p>The Neverhood</p>
                    <p>152.5 km</p>
                    <p>21 lat</p>
                </div>
                <div class="addfriend"></div>
            </div>
            <div class="routes">
                <div class="routestitle">
                    <p>Trasy</p>
                </div>
                <div class="routecontainer">
                    <div class="routeobject">
                        <div class="picture-box"> 
                            1c
                        </div>
                        <div class="description-box">
                            <div class="citydata">
                                <div>1</div>
                                <div>2</div>
                            </div>
                            <div class="rating">
                                <p>le_rating</p>
                            </div>
                        </div>
                    </div>
                    <div class="routeobject">
                        <div class="picture-box"> 
                            1c
                        </div>
                        <div class="description-box">
                            <div class="citydata">
                                <div>1</div>
                                <div>2</div>
                            </div>
                            <div class="rating">
                                <p>le_rating</p>
                            </div>
                        </div>
                    </div>
                    <div class="routeobject">
                        <div class="picture-box"> 
                            1c
                        </div>
                        <div class="description-box">
                            <div class="citydata">
                                <div>1</div>
                                <div>2</div>
                            </div>
                            <div class="rating">
                                <p>le_rating</p>
                            </div>
                        </div>
                    </div>
                    <div class="routeobject">
                        <div class="picture-box"> 
                            1c
                        </div>
                        <div class="description-box">
                            <div class="citydata">
                                <div>1</div>
                                <div>2</div>
                            </div>
                            <div class="rating">
                                <p>le_rating</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="friends">
            <div class="friendstitle">
                <p>Friends<p>
            </div>
            <div class="friendscontainer">
                <div class="friendobject">
                    <div class="friendpicture">
                        <img src="public/img/klaymen.png">
                    </div>
                    <div class="friendinfo">
                        <p>Potezny Kekunio</p>
                    </div>         
                </div>
                <div class="friendobject">
                    <div class="friendpicture">
                        <img src="public/img/klaymen.png">
                    </div>
                    <div class="friendinfo">
                        <p>topkek</p>
                    </div>         
                </div>
                <div class="friendobject">
                    <div class="friendpicture">
                        <img src="public/img/klaymen.png">
                    </div>
                    <div class="friendinfo">
                        <p>topkek</p>
                    </div>         
                </div>
            </div>
        </div>
    </div>
</body>