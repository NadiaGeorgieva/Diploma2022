<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body bgcolor="#572556">
        <div class="main">
            <h1><center>Login</center></h1>
            <form action="process.php" method="post">
                <center>
                    <label for="username" style="font-size:24px;">Username:</label>
                    <input type="text" placeholder="Ener username" id="username" name="name" class="input_values" required>            
                    <br>
                    <label for="password" style="font-size:24px;">Password:</label>
                    <input type="password" placeholder="Enter password" id="password" name="password" style="margin-left:5px;margin-top:2%;" class="input_values" required>
                   
                   
                    <br>
                    <input type="submit" id="login_btn" value="Login" name="login" style="margin-left: 23%;" style="text-decoration: none;
                    color: rgba(241, 229, 229, 0.8);
                    background: rgb(66, 54, 75);
                    padding: 7px 4px;
                    font-family: Georgia, 'Times New Roman', Times, serif;
                    border-radius: 6px;
                    font-weight: normal;
                    text-transform: uppercase;
                    transition: all 0.2s ease-in-out;"> 
            </center>    
            </form>
        </div>
    </body>
</html>