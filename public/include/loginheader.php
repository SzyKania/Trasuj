<?php
session_start();
if(isset($_SESSION["userid"])){
    header("location: ../routes");
}
?>

<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="/public/css/login.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <?php
    if($pagename === "register"){
        ?>
        <script type="text/javascript" src="./public/js/script.js" defer></script>
        <?php
    }
    ?>
    <title><?=$pagename?></title>
</head>

<body>
<div class="container">
    <div class="logo">
        <img src="/public/img/logo.svg" alt="logo">
    </div>