<?php
$pagename = "profile";
include(__DIR__.'/../include/siteheader.php');
?>
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
                    <button class="followbutton" id="<?= $user->getId() ?>">FOLLOW</button>
                    <button class="unfollowbutton" id="<?= $user->getId() ?>">UNFOLLOW</button>
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
                            <img class="picture" src="/public/uploads/<?= $route->getImage() ?>" alt="routephoto">
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
                <?php if (!empty($follows)) {
                    foreach ($follows as $follow): ?>
                        <div class="friendobject" role="button" onclick="location.href='profile?id=<?= $follow->getId() ?>'">
                            <div class="friendpicture">
                                <img src="/public/uploads/<?= $follow->getPhoto() ?>" alt="followpic">
                            </div>
                            <div class="friendinfo">
                                <p><?= $follow->getName() ?> <?= $follow->getSurname() ?></p>
                            </div>
                        </div>
                    <?php endforeach;
                } ?>
            </div>
        </div>
    </div>
</body>