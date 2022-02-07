<?php
$pagename = "favourites";
include(__DIR__.'/../include/siteheader.php');
?>
    <div class="main">
        <div class="content-box">
            <?php if (!empty($routes)) {
                foreach ($routes as $route): ?>
                    <div class="content-item" role="button" onclick="location.href='routedetails?id=<?= $route->getId() ?>'">
                        <div class="text-box" id="miasto">
                            <p><?=$route->getCity()?></p>
                            <p>Road type: <?=$route->getRoadtype()?></p>
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
        </div>
    </div>
</body>