<?php
session_start();
if(!isset($_SESSION["useremail"])){
    header("location: ../login");
}
?>

<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="/public/css/navbars.css">
    <link rel="stylesheet" type="text/css" href="/public/css/add-route.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <title>ADD ROUTE</title>
</head>

<body>
    <div class="sidenav">
        <div class="sidelogobox">
            <img class="sidelogo" src="/public/img/logo.svg" alt="logo">
        </div>
        <div class="sidebuttons">
            <a href="routes">ROUTES</a>
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