<?php
session_start();
if(!isset($_SESSION["useremail"])){
    header("location: ../login");
}
?>

<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="/public/css/navbars.css">
    <link rel="stylesheet" type="text/css" href="/public/css/favourites.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <title>FAVOURITES PAGE</title>
</head>

<body>
    <div class="sidenav">
        <div class="sidelogobox">
            <img class="sidelogo" src="/public/img/logo.svg" alt="logo">
        </div>
        <div class="sidebuttons">
            <a href="routes">ROUTES</a>
            <a href="#" id="current">FAVOURITES</a>
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
        <div class="content-box">
            <div class="content-item">
                <div class="shareicon">
                    <img src="/public/img/sharearrow.svg">
                </div>
                <div class="text-box" id="miasto">
                    <p>BIELSKO-BIALA</p>
                    <p>Road type:</p>
                    <p>Last visit:</p>
                </div>
                <div class="text-box"> 
                    <p>Trasa na Szyndzielni</p>
                    <p>Best time:</p>
                    <p>Often with:</p>
                </div>   
                <div class="picture-box"> 1c</div>
            </div>
            <div class="content-item">
                <div class="shareicon">
                    <img src="public/img/sharearrow.svg">
                </div>
                <div class="text-box" id="miasto">
                    <p>BIELSKO-BIALA</p>
                    <p>Road type:</p>
                    <p>Last visit:</p>
                </div>
                <div class="text-box"> 
                    <p>Trasa na Szyndzielni</p>
                    <p>Best time:</p>
                    <p>Often with:</p>
                </div>   
                <div class="picture-box"> 1c</div>
            </div>
            <div class="content-item">
                <div class="shareicon">
                    <img src="public/img/sharearrow.svg">
                </div>
                <div class="text-box" id="miasto">
                    <p>BIELSKO-BIALA</p>
                    <p>Road type:</p>
                    <p>Last visit:</p>
                </div>
                <div class="text-box"> 
                    <p>Trasa na Szyndzielni</p>
                    <p>Best time:</p>
                    <p>Often with:</p>
                </div>   
                <div class="picture-box"> 1c</div>
            </div>
            <div class="content-item">
                <div class="shareicon">
                    <img src="public/img/sharearrow.svg">
                </div>
                <div class="text-box" id="miasto">
                    <p>BIELSKO-BIALA</p>
                    <p>Road type:</p>
                    <p>Last visit:</p>
                </div>
                <div class="text-box"> 
                    <p>Trasa na Szyndzielni</p>
                    <p>Best time:</p>
                    <p>Often with:</p>
                </div>   
                <div class="picture-box"> 1c</div>
            </div>
            <div class="content-item">
                <div class="shareicon">
                    <img src="public/img/sharearrow.svg">
                </div>
                <div class="text-box" id="miasto">
                    <p>BIELSKO-BIALA</p>
                    <p>Road type:</p>
                    <p>Last visit:</p>
                </div>
                <div class="text-box"> 
                    <p>Trasa na Szyndzielni</p>
                    <p>Best time:</p>
                    <p>Often with:</p>
                </div>   
                <div class="picture-box"> 1c</div>
            </div>
            <div class="content-item">
                <div class="shareicon">
                    <img src="public/img/sharearrow.svg">
                </div>
                <div class="text-box" id="miasto">
                    <p>BIELSKO-BIALA</p>
                    <p>Road type:</p>
                    <p>Last visit:</p>
                </div>
                <div class="text-box"> 
                    <p>Trasa na Szyndzielni</p>
                    <p>Best time:</p>
                    <p>Often with:</p>
                </div>   
                <div class="picture-box"> 1c</div>
            </div>
            <div class="content-item">
                <div class="shareicon">
                    <img src="public/img/sharearrow.svg">
                </div>
                <div class="text-box" id="miasto">
                    <p>BIELSKO-BIALA</p>
                    <p>Road type:</p>
                    <p>Last visit:</p>
                </div>
                <div class="text-box"> 
                    <p>Trasa na Szyndzielni</p>
                    <p>Best time:</p>
                    <p>Often with:</p>
                </div>   
                <div class="picture-box"> 1c</div>
            </div>
            <div class="content-item">
                <div class="shareicon">
                    <img src="public/img/sharearrow.svg">
                </div>
                <div class="text-box" id="miasto">
                    <p>BIELSKO-BIALA</p>
                    <p>Road type:</p>
                    <p>Last visit:</p>
                </div>
                <div class="text-box"> 
                    <p>Trasa na Szyndzielni</p>
                    <p>Best time:</p>
                    <p>Often with:</p>
                </div>   
                <div class="picture-box"> 1c</div>
            </div>
            <div class="content-item">
                <div class="shareicon">
                    <img src="public/img/sharearrow.svg">
                </div>
                <div class="text-box" id="miasto">
                    <p>BIELSKO-BIALA</p>
                    <p>Road type:</p>
                    <p>Last visit:</p>
                </div>
                <div class="text-box"> 
                    <p>Trasa na Szyndzielni</p>
                    <p>Best time:</p>
                    <p>Often with:</p>
                </div>   
                <div class="picture-box"> 1c</div>
            </div>
            <div class="content-item">
                <div class="shareicon">
                    <img src="public/img/sharearrow.svg">
                </div>
                <div class="text-box" id="miasto">
                    <p>BIELSKO-BIALA</p>
                    <p>Road type:</p>
                    <p>Last visit:</p>
                </div>
                <div class="text-box"> 
                    <p>Trasa na Szyndzielni</p>
                    <p>Best time:</p>
                    <p>Often with:</p>
                </div>   
                <div class="picture-box"> 1c</div>
            </div>
            <div class="content-item">
                <div class="shareicon">
                    <img src="public/img/sharearrow.svg">
                </div>
                <div class="text-box" id="miasto">
                    <p>BIELSKO-BIALA</p>
                    <p>Road type:</p>
                    <p>Last visit:</p>
                </div>
                <div class="text-box"> 
                    <p>Trasa na Szyndzielni</p>
                    <p>Best time:</p>
                    <p>Often with:</p>
                </div>   
                <div class="picture-box"> 1c</div>
            </div>
            <div class="content-item">
                <div class="shareicon">
                    <img src="public/img/sharearrow.svg">
                </div>
                <div class="text-box" id="miasto">
                    <p>BIELSKO-BIALA</p>
                    <p>Road type:</p>
                    <p>Last visit:</p>
                </div>
                <div class="text-box"> 
                    <p>Trasa na Szyndzielni</p>
                    <p>Best time:</p>
                    <p>Often with:</p>
                </div>   
                <div class="picture-box"> 1c</div>
            </div>
        </div>
    </div>
</body>