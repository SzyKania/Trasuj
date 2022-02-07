<?php
$pagename = "routedetails";
include(__DIR__.'/../include/siteheader.php');
?>
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