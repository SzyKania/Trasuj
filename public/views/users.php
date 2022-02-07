<?php
$pagename = "users";
include(__DIR__.'/../include/siteheader.php');
?>
    <div class="main">
        <div class="grid-box">
            <?php foreach ($users as $user): ?>
                <div class="grid-item" role="button" onclick="location.href='profile?id=<?= $user->getId() ?>'">
                    <div class="picture-box">
                        <img class="photo" src="public/img/<?= $user->getPhoto()?>" alt="userpic">
                    </div>
                    <div class="description-box">
                        <p id="name"><?= $user->getName()?></p>
                        <p id="city"><?= $user->getSurname()?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>

