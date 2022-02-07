<?php
session_start();
if(!isset($_SESSION["userid"])){
    header("location: ../login");
}
?>

<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="/public/css/navbars.css">
    <link rel="stylesheet" type="text/css" href="/public/css/routedetails.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <script type="text/javascript" src="/public/js/logout.js" defer></script>
    <script type="text/javascript" src="/public/js/favourite.js" defer></script>
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
            <a href="profile?id=<?= $_SESSION["userid"] ?>">MY PROFILE</a>
            <a href="#" id="logout">LOGOUT</a>
        </div>
    </div>
    <div class="topnav">
        <input  class="searchbar" name="searchbar" type="search" placeholder="BROWSE ROUTES">
    </div>
    <div class="main">
        <div class="maincontent">
            <div class="routeinfo">
                <div class="routename">
                    <p><?=$route->getTitle()?></p>
                    <p><?=$route->getCity()?></p>
                </div>
                <div class="routedata">
                    <p><?=$route->getRoadtype()?></p>
                    <p>Users' rating: <?=$route->getRating()?></p>
                </div>
                <div>
                    <button class="mapbutton favourite" id="<?= $route->getId() ?>">FAVOURITE</button>
                    <button class="mapbutton unfavourite" id="<?= $route->getId() ?>">UNFAVOURITE</button>
                </div>
            </div>
            <div class="reviewsandgallery">
                <div class="reviews">
                    <?php foreach ($reviews as $review): ?>
                        <div class="review" role="button" onclick="location.href='profile?id=<?= $review->getAuthorId() ?>'">
                            <div class="reviewinfo">
                                <div class="reviewerphoto">
                                    <img class="photo" src="/public/img/<?= $review->getAuthorPhoto() ?>">
                                </div>
                                <div class="reviewdata">
                                    <div class="metadata">
                                        <div class="rating">
                                            <p> <?= $review->getRating() ?>   </p>
                                        </div>
                                        <div>
                                            <p> <?= date('Y-m-d', strtotime($review->getCreatedAt())) ?> </p>
                                        </div>
                                    </div>
                                    <div class="reviewername">
                                        <p><?= $review->getAuthorName() ?> <?= $review->getAuthorSurname() ?> </p>
                                    </div>
                                </div>
                            </div>
                            <div class="reviewtext">
                                <p> <?= $review->getDescription() ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="gallery">
                    <div class="picture">
                        <img src="/public/uploads/<?= $route->getImage() ?>">
                        <div class="gallerybuttons">
                            <button class="gallerybutton" onclick="location.href='addReview?id=<?=$route->getId()?>'">ADD REVIEW</button>
                         </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

</body>