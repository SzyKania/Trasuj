<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="/public/css/navbars.css">
    <link rel="stylesheet" type="text/css" href="/public/css/routes.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <title>BROWSING PAGE</title>
</head>

<body>
    <div class="sidenav">
        <div class="sidelogobox">
            <img class="sidelogo" src="/public/img/logo.svg" alt="logo">
        </div>
        <div class="sidebuttons">
            <a href="#" id="current">ROUTES</a>
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
    <button class="addbutton" onclick="location.href='addRoute'">+</button>
    <div class="main">
        <div class="grid-box">
            <?php foreach ($routes as $route): ?>
                <div class="grid-item" role="button" onclick="location.href='routedetails'">
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
</body>