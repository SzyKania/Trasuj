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
            <img class="sidelogo" src="/public/img/logo.svg">
        </div>
        <div class="sidebuttons">
            <a href="browse">BROWSE</a>
            <a href="favourites">FAVOURITES</a>
            <!-- <a href="#">HISTORY</a> -->
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
                <input name="roadtype" type="text" placeholder="roadtype">
                <input type="file" name="file"/><br/>
                <button type="submit" class="sendbutton">SEND</button>
            </form>
        </section>
    </div>
</body>