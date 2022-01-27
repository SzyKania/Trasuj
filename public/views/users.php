<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="../css/navbars.css">
    <link rel="stylesheet" type="text/css" href="../css/users.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <title>ROUTE DETAILS</title>
</head>

<body>
    <div class="sidenav">
        <div class="sidelogobox">
            <img class="sidelogo" src="../img/logo.svg">
        </div>
        <div class="sidebuttons">
            <a href="browse.php">BROWSE</a>
            <a href="favourites.php">FAVOURITES</a>
            <!-- <a href="#">HISTORY</a> -->
            <a href="#" id="current">USERS</a>
            <a href="friends.php">FRIENDS</a>
            <a class = "settingsbutton" href="#">SETTINGS</a>
        </div>
    </div>
    <div class="topnav">
        <input  class="searchbar" name="searchbar" type="search" placeholder="BROWSE ROUTES">
        <button class="routesbutton">NEAR ROUTES</button>
    </div>
    <div class="main">
        <div class="grid-box">
            <div class="grid-item" role="button" onclick="location.href='profile.php'">
                <div class="picture-box">
                    <img class="photo" src="../img/nikiel.png">
                </div>
                <div class="description-box"> 
                    <p id="name">Michal Pikiel</p>
                    <p id="city">Katowice</p> 
                </div>
            </div>
            <div class="grid-item">
                <div class="picture-box">
                    <img class="photo" src="../img/nikiel.png">
                </div>
                <div class="description-box"> 
                    <p id="name">Michal Pikiel</p>
                    <p id="city">Katowice</p> 
                </div>
            </div>
            <div class="grid-item">
                <div class="picture-box">
                    <img class="photo" src="../img/nikiel.png">
                </div>
                <div class="description-box"> 
                    <p id="name">Michal Pikiel</p>
                    <p id="city">Katowice</p> 
                </div>
            </div>
            <div class="grid-item">
                <div class="picture-box">
                    <img class="photo" src="../img/nikiel.png">
                </div>
                <div class="description-box"> 
                    <p id="name">Michal Pikiel</p>
                    <p id="city">Katowice</p> 
                </div>
            </div>
            
        </div>
    </div>
</body>

