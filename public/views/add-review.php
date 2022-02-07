<?php
$pagename = "add-review";
include(__DIR__.'/../include/siteheader.php');
?>
    <div class="main">
        <section class="formcontainer">
            <h1>ADD NEW REVIEW</h1>
            <form class="route-form" action="addReview?id=<?=$_GET['id']?>" method="POST" ENCTYPE="multipart/form-data">
                <?php if(isset($messages)) {
                            foreach ($messages as $message){
                                echo $message;
                            }
                        }
                        ?>
                <input name="rating" class="ratinginput" type="number" min="0" max="5" step="0.5" placeholder="rating">
                <textarea rows="10" cols="30" name="description" class="descriptioninput" type="text" placeholder="description"></textarea>
                <br><br>
                <button type="submit" class="sendbutton">SEND</button>
            </form>
        </section>
    </div>
</body>