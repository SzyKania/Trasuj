<?php
$pagename = "add-route";
include(__DIR__.'/../include/siteheader.php');
?>
    <div class="main">
        <section class="formcontainer">
            <h1>ADD NEW ROUTE</h1>
            <form class="route-form" action="addRoute" method="POST" ENCTYPE="multipart/form-data">                
                <?php if(isset($messages)) {
                            foreach ($messages as $message){
                                echo $message;
                            }
                        }
                        ?>
                <input name="title" type="text" placeholder="title">
                <input name="city" type="text" placeholder="city">
                <select name="roadtype">
                    <option value = "1">Gravel</option>
                    <option value = "2">Brick</option>
                    <option value = "3">Dirt</option>
                    <option value = "4">Asphalt</option>
                </select>
                <input type="file" name="file"/><br/>
                <button type="submit" class="sendbutton">SEND</button>
            </form>
        </section>
    </div>
</body>