<?php
session_start();
if(!isset($_SESSION["userid"])){
    header("location: ../login");
}
?>

<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="/public/css/navbars.css">
    <link rel="stylesheet" type="text/css" href="/public/css/profile.css">
    <link rel="stylesheet" type="text/css" href="/public/css/routes.css">
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
            <a href="profile?id=<?php $_SESSION["userid"] ?>">MY PROFILE</a>
            <a href="#" id="logout">LOGOUT</a>
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
                    <img src="/public/img/<?= $user->getPhoto() ?>">
                </div>
                <div class="infotext">
                    <p><?= $user->getName()?> <?= $user->getSurname()?> </p>
                    <?php if($user->getId() != $_SESSION['userid']){
                        ?>
                    <button>FOLLOW</button>
                    <button>UNFOLLOW</button>
                    <?php
                    }
                    ?>
                </div>
            </div>
            <div class="routes">
                <div class="routestitle">
                    <p>Trasy</p>
                </div>
                <div class="routecontainer">
                    <?php foreach ($routes as $route): ?>
                        <div class="grid-item" role="button" onclick="location.href='routedetails?id=<?= $route->getId() ?>'">
                            <img class="picture" src="/public/uploads/<?= $route->getImage() ?>" alt="projectphoto">
                            <div class="description-box">
                                <div class="citydata">
                                    <p><?= $route->getCity() ?></p>
                                    <p><?= $route->getRoadtype() ?></p>
                                </div>
                                <div class="rating">
                                    <p><?= $route->getRating() ?>/5</p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <div class="friends">
            <div class="friendstitle">
                <p>Followed<p>
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