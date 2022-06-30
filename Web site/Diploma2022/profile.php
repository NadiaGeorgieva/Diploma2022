<?php
include_once("config.php");
?>    
    <!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <link rel="stylesheet" type="text/css" href="main.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="main.js"></script>
</head>
<body style="background-color: #cbdbe3;">
    <div class="top">
        <marquee width = "75%">Заредете живота си със силата и мъдростта на всемогъщата вселена. Купете скъпоценни и полускъпоценни камъни, минерали и други дарове на земните стихии на най-изгодни цени. Голямото разнообразие, което предлагаме, ще покрие индивидуалните ви нужди. Минералите в своите многобройни цветове, форми и енергийни свойства ще ви донесат просперитет, здраве, красота, любов и баланс.</marquee>
        <img src="logout.png" width="40">
        <a href="logout.php" id="a1">Log out</a>
    </div>

    <div class="topnav"> 
        <img src="crystals.jpg" class="responsive" style="height:auto;">
        <a href="index.html" class="active">Начало</a>
        <a href="crystals.html">Кристали</a>
        <a href="minerals.html">Минерали</a>
        <a href="#market">Магазин</a> 
        <a href="astrology.html">Астрология</a> 
        <a href="blog.html">Блог</a>
        <a href="contact.html">Контакти</a>
    </div>
        <h1><center>Welcome,
            <?php
                session_start();
                echo  $_SESSION['username'];    
            ?>
        </center></h1>
        <footer>
    <table class="table">
        <thead>
            <tr>
                <th scope="col" style="text-align: left;">Намерете ни</th>
                <th scope="col" style="text-align: right;">Връзки към социални мрежи</th>
                <th scope="col" style="text-align: center;">Полезни връзки</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2908.212423705242!2d27.915602315278946!3d43.20503368931281!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40a453f6081b3a81%3A0x1f83ae40851e40f3!2zNdGC0Lgg0JXQu9C10LzQtdC90YIgLSDQvNCw0LPQsNC30LjQvSDQt9CwINC60LDQvNGK0L3QuCDQuCDQvNC40L3QtdGA0LDQu9C4!5e0!3m2!1sbg!2sbg!4v1652799022830!5m2!1sbg!2sbg"  style="border:0;height: auto;width:100%;float: left;"></iframe>
                </td>
                <td> 
                    <a href="https://bg-bg.facebook.com/"><img src="facebook.png" > Facebook</a>
                </td>
                <td>
                    <a href="https://bijuta-ludigabi.com/" >Луди гъби</a>
                </td>
            </tr>
        </tbody>
    </table>
        <p>© 2022 Crystals&&Minerals, LLC. All rights reserved.</p>
</footer>
    </body>
</html>
