<?php
include 'scripts/registration.php';
?>
<html>
    <head>
        <link rel="stylesheet" href="assets/style/style.css">
    </head>
    <body class="rail-bg4">
        <div>
            <div id="mytopnav" class = "topnav">
                <div id="mytopnav" class = "topnav">
                    <div id="navtext"><a href="Railway.html" >Home</a></div> 
                    <div id="navtext"><a href="Railway_PNR.html">PNR Enquiry</a></div>
                    <div id="navtext"><a href="Railway_tickets.html">Book Tickets</a></div>
                    <div id="navtext"><a href="#Freight Services">Freight Services</a></div>
                    <div id="navtext"><a href="railway_register.php" >Login/Register</a></div>
</div>
</div>
            <div id ="register_glass"><h1 id="Register_heading">Register</h1>
               

                <form method="post" name="registration">  
                <?php if(isset($msg)){ echo "<span id=error>".$msg."</span>";} ?>
               <button id="Register_login"  > <a href="Railway_login.html" >Login</a></button><br>
               

               <label id="register_email">Name:</label>
               <input id ="Register_input" type="text" name="name" /><br>
               <label id="register_email">Age:</label>
               <input id ="Register_input" type="number" name ="age"/><br>
               <label id="register_email">Mobile number:</label>
               <input id ="Register_input" type="number" name="mobile" /><br>

               <label id="register_email">Gender:</label>
               <input type="radio" id="female" value="Female" name="gender">
               <label for="html">Female</label><br>
               <input type="radio" id="male" value="Male" name="gender">
               <label for="html">Male</label><br>
               
               <label id="register_email">Email:</label>
               <input id ="Register_input" type="text"  value="Eg:admin@gmail.com" name="email"/><br>
               <label id="register_email">Password:</label>
               <input id ="Register_input" type="password" name="password" /><br>
               <input id="Register_showPass" type="checkbox" onclick="myFunction()">Show Password<br>
               <label id="register_email">Confirm Password:</label>
               <input id ="Register_input" type="password" />
               <input id="check_PNR"  name="btn_reg" type="submit"/>
               
               </form>
            </div>
        
    </body>
</html>