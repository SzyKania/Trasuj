<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="/public/css/navbars.css">
    <link rel="stylesheet" type="text/css" href="/public/css/browse.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <title>BROWSING PAGE</title>
</head>

<body>
    <div class="sidenav">
        <div class="sidelogobox">
            <img class="sidelogo" src="/public/img/logo.svg">
        </div>
        <div class="sidebuttons">
            <a href="#" id="current">BROWSE</a>
            <a href="favourites">FAVOURITES</a>
            <!-- <a href="#">HISTORY</a> -->
            <a href="users">USERS</a>
            <a href="friends">FRIENDS</a>
            <a class = "settingsbutton" href="#">SETTINGS</a>
        </div>
    </div>
    <div class="topnav">
        <input  class="searchbar" name="searchbar" type="search" placeholder="BROWSE ROUTES">
        <button class="routesbutton">NEAR ROUTES</button>
    </div>
    <button class="addbutton" onclick="location.href='addRoute'">+</button>
    <div class="main">
        <div class="grid-box">
            <div class="grid-item" role="button" onclick="location.href='routedetails'">
                <div class="picture-box">
                    <img class="picture" src="/public/uploads/<?= $route->getImage() ?>">
                </div>
                <div class="description-box">
                    <div class="citydata">
                        <p><?= $route->getCity() ?></p>
                        <p><?= $route->getRoadtype() ?></p>
                    </div>
                    <div class="rating">
                        <p>le_rating</p>
                    </div>
                </div>
            </div>
            <div class="grid-item">
                <div class="picture-box">
                    <img class="picture" src="/public/uploads/<?= $route->getImage() ?>">
                </div>
                <div class="description-box">
                    <div class="citydata">
                        <p><?= $route->getCity() ?></p>
                        <p><?= $route->getRoadtype() ?></p>
                    </div>
                    <div class="rating">
                        <p>le_rating</p>
                    </div>
                </div>
            </div>
            <div class="grid-item">
                <div class="picture-box">
                    <img class="picture" src="/public/uploads/<?= $route->getImage() ?>">
                </div>
                <div class="description-box">
                    <div class="citydata">
                        <p><?= $route->getCity() ?></p>
                        <p><?= $route->getRoadtype() ?></p>
                    </div>
                    <div class="rating">
                        <p>le_rating</p>
                    </div>
                </div>
            </div>
            <div class="grid-item">
                <div class="picture-box">
                    <img class="picture" src="/public/uploads/<?= $route->getImage() ?>">
                </div>
                <div class="description-box">
                    <div class="citydata">
                        <p><?= $route->getCity() ?></p>
                        <p><?= $route->getRoadtype() ?></p>
                    </div>
                    <div class="rating">
                        <p>le_rating</p>
                    </div>
                </div>
            </div>
            <div class="grid-item">
                <div class="picture-box">
                    <img class="picture" src="/public/uploads/<?= $route->getImage() ?>">
                </div>
                <div class="description-box">
                    <div class="citydata">
                        <p><?= $route->getCity() ?></p>
                        <p><?= $route->getRoadtype() ?></p>
                    </div>
                    <div class="rating">
                        <p>le_rating</p>
                    </div>
                </div>
            </div>
            <div class="grid-item">
                <div class="picture-box">
                    <img class="picture" src="/public/uploads/<?= $route->getImage() ?>">
                </div>
                <div class="description-box">
                    <div class="citydata">
                        <p><?= $route->getCity() ?></p>
                        <p><?= $route->getRoadtype() ?></p>
                    </div>
                    <div class="rating">
                        <p>le_rating</p>
                    </div>
                </div>
            </div>
            <div class="grid-item">
                <div class="picture-box">
                    <img class="picture" src="/public/uploads/<?= $route->getImage() ?>">
                </div>
                <div class="description-box">
                    <div class="citydata">
                        <p><?= $route->getCity() ?></p>
                        <p><?= $route->getRoadtype() ?></p>
                    </div>
                    <div class="rating">
                        <p>le_rating</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>