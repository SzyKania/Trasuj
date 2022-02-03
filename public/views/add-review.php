<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="/public/css/navbars.css">
    <link rel="stylesheet" type="text/css" href="/public/css/add-route.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <title>ADD REVIEW</title>
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
            <h1>ADD NEW REVIEW</h1>
            <form class="route-form" action="addReview" method="POST" ENCTYPE="multipart/form-data">
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