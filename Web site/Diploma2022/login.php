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
        <img src="login.png" width="20">
        <a href="login.php" style="color:#05062a;" id="a1">Login</a> 
        <img src="register.png" width="25">
        <a href="register.php" style="color:#05062a;" id="a2">Register</a>
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
    <div style="margin-top:5%;">
            <h1><center>Вход</center></h1>
            <form action="process.php" method="post">
                <center>
                    <label for="username" style="font-size:24px;">Потребител:</label>
                    <input type="text" placeholder="Ener username" id="username" name="user" class="input_values" required>            
                    <br>
                    <label for="password" style="font-size:24px;">Парола:</label>
                    <input type="password" placeholder="Enter password" id="password" name="pass" style="margin-left:60px;margin-top:2%;" class="input_values" required>
                   
                   
                    <br>
                    <input type="submit" id="login_btn" value="Влизане" name="login"  style=" margin-top:2%;margin-left: 16%;text-decoration: none;
                    color: rgba(241, 229, 229, 0.8);
                    background: rgb(66, 54, 75);
                    width:10%;
                    height:20%;
                    font-family: Georgia, 'Times New Roman', Times, serif;
                    border-radius: 6px;
                    font-weight: normal;
                    font-size:20px;
                    text-transform: uppercase;
                    transition: all 0.2s ease-in-out;"> 
                </center>    
            </form>
        </div>
</div>
<footer style="margin-top:10%;">
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