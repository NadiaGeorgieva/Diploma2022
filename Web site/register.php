<html>
    <head>
        <meta charset="utf-8">
        <title>Register</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body bgcolor="#572556">
        <div class="main">
            <h1><center>Register</center></h1>
            <form action="process.php" method="post">
                <center>
                    <label for="username" style="font-size:24px;">Username:</label>
                    <input type="text" placeholder="Ener username" id="username" name="username" style="margin-left:2.5%;" class="input_values" required>            
                    <br>
                    <label for="password" style="font-size:24px;">Password:</label>
                    <input type="password" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2, 3}$"  placeholder="Enter password" id="password" name="password" style="margin-left:2.8%;margin-top:2%;" class="input_values" required>
                    <br>
                    <label for="repassword" style="font-size:24px;">RePassword:</label>
		            <input type="password" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2, 3}$" placeholder="Confirm your password" id="repassword" name="repassword" style="margin-top:2.5%;" class="input_values" required/>
		            <br>
		            <label for="name" style="font-size:24px;">Full name:</label>
			        <input type="text" pattern="[A-Za-z]{1,32}" placeholder="Type your name" id="name" name="name" style="margin-left:6%;margin-top:2%;" class="input_values" required/>
				    <br>
				    <label for="email" style="font-size:24px;">Email:</label>
			        <input type="email"  placeholder="Type your email" id="email" name="email" style="margin-left:4.5%;margin-top:2%;" class="input_values" required/>
				   
                </center>
                <div style="margin-left: 58%; margin-top: 1%;">
                    <input type="submit" id="register_btn" value="Register" name="register" style="text-decoration: none;
                    color: rgba(241, 229, 229, 0.8);
                    background: rgb(66, 54, 75);
                    padding: 7px 4px;
                    font-family: Georgia, 'Times New Roman', Times, serif;
                    border-radius: 6px;
                    font-weight: normal;
                    text-transform: uppercase;
                    transition: all 0.2s ease-in-out;">
                </div>    
            </form>
        </div>
    </body>
  </html>