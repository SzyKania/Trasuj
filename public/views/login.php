<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/login.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <title>LOGIN PAGE</title>
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="public/img/logo.svg">
        </div>
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
        </div>
    </div>
</body>