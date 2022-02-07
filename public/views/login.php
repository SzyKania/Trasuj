<?php
$pagename = "login";
include(__DIR__.'/../include/loginheader.php');
?>
        <div class="login-container">
            <form action="login" method="POST">
                <div class="message">
                    <?php if(isset($messages)) {
                        foreach ($messages as $message){
                            echo $message;
                        }
                    }
                    ?>
                </div>
                <div class="textcontainer">
                    <p class="logintext" >E-MAIL ADDRESS</p>
                </div>
                <input name="email" type="text">
                <div class="textcontainer">
                    <p class="logintext" >PASSWORD</p>
                </div>
                <input name="password" type="password">
                <button type="submit" class="loginbutton">LOGIN</button>
            </form>
            <button class="loginbutton" onclick="location.href='register'">REGISTER</button>
        </div>
    </div>
</body>