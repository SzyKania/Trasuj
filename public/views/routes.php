<?php
$pagename = "routes";
include(__DIR__.'/../include/siteheader.php');
?>
    <button class="addbutton" onclick="location.href='addRoute'">+</button>
    <div class="main">
        <div class="grid-box">
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
</body>

<template id="route-template">
    <div class="grid-item" id="">
        <img class="picture" src="">
        <div class="description-box">
            <div class="citydata">
                <p id="city"></p>
                <p id="roadtype"></p>
            </div>
            <div class="rating">
                <p id="rating"></p>
            </div>
        </div>
    </div>
</template>