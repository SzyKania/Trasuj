<?php
session_start();
if(!isset($_SESSION["useremail"])){
    header("location: ../login");
}
?>

<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="/public/css/navbars.css">
    <link rel="stylesheet" type="text/css" href="/public/css/routedetails.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <title>ROUTE DETAILS</title>
</head>

<body>
    <div class="sidenav">
        <div class="sidelogobox">
            <img class="sidelogo" src="/public/img/logo.svg" alt="logo">
        </div>
        <div class="sidebuttons">
            <a href="routes" id="current">ROUTES</a>
            <a href="favourites">FAVOURITES</a>
            <a href="users">USERS</a>
            <a href="friends">FRIENDS</a>
            <a class = "settingsbutton" href="#">SETTINGS</a>
        </div>
    </div>
    <div class="topnav">
        <input  class="searchbar" name="searchbar" type="search" placeholder="BROWSE ROUTES">
        <button class="routesbutton">NEAR ROUTES</button>
    </div>
    <button class="addbutton" onclick="location.href='addReview'">+</button>
    <div class="main">
        <div class="maincontent">
            <div class="routeinfo">
                <div class="routename">
                    <p>Trasa na Szyndzielni</p>
                    <p>BIELSKO-BIALA</p>
                </div>
                <div class="routedata">
                    <p>Road type: Gravel</p>
                    <p>Users' rating: </p>
                </div>
                <div>
                    <button class="mapbutton">View on map</button>
                </div>
            </div>
            <div class="reviewsandgallery">
                <div class="reviews">
                    <div class="review">
                        <div class="reviewinfo">
                            <div class="reviewerphoto">
                                <img class="photo" src="/public/img/nikiel.png">
                            </div>
                            <div class="reviewdata">
                                <div class="metadata">
                                    <div class="rating">
                                        <p> <?= $review->getRating() ?> </p>
                                    </div>
                                    <div>
                                        <p>1 MONTH AGO</p>
                                    </div>
                                </div>
                                <div class="reviewername">
                                    <p>MICHAL CO SIE SKICHAL</p>
                                </div>
                            </div>
                        </div>
                        <div class="reviewtext">
                            <p> <?= $review->getDescription() ?></p>
                        </div>
                    </div>
                    <div class="review">
                        <div class="reviewinfo">
                            <div class="reviewerphoto">
                                <img class="photo" src="/public/img/nikiel.png">
                            </div>
                            <div class="reviewdata">
                                <div class="metadata">
                                    <div class="rating">
                                        <p>PIEC GWIAZDEK!!</p>
                                    </div>
                                    <div>
                                        <p>1 MONTH AGO</p>
                                    </div>
                                </div>
                                <div class="reviewername">
                                    <p>MICHAL CO SIE SKICHAL</p>
                                </div>
                            </div>
                        </div>
                        <div class="reviewtext">
                            <p>Lorem</p>
                        </div>
                    </div>
                    <div class="review">
                        <div class="reviewinfo">
                            <div class="reviewerphoto">
                                <img class="photo" src="/public/img/nikiel.png">
                            </div>
                            <div class="reviewdata">
                                <div class="metadata">
                                    <div class="rating">
                                        <p>PIEC GWIAZDEK!!</p>
                                    </div>
                                    <div>
                                        <p>1 MONTH AGO</p>
                                    </div>
                                </div>
                                <div class="reviewername">
                                    <p>MICHAL CO SIE SKICHAL</p>
                                </div>
                            </div>
                        </div>
                        <div class="reviewtext">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                    </div>
                    <div class="review">
                        <div class="reviewinfo">
                            <div class="reviewerphoto">
                                <img class="photo" src="/public/img/nikiel.png">
                            </div>
                            <div class="reviewdata">
                                <div class="metadata">
                                    <div class="rating">
                                        <p>PIEC GWIAZDEK!!</p>
                                    </div>
                                    <div>
                                        <p>1 MONTH AGO</p>
                                    </div>
                                </div>
                                <div class="reviewername">
                                    <p>MICHAL CO SIE SKICHAL</p>
                                </div>
                            </div>
                        </div>
                        <div class="reviewtext">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                    </div>
                </div>
                <div class="gallery">
                    <div class="picture">
                        <img src="/public/img/dynia.png">
                        <div class="gallerybuttons">
                            <button class="gallerybutton" onclick="location.href='addReview'">ADD REVIEW</button>
                         </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

</body>