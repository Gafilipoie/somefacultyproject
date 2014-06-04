


<?php
    /**
     * Starting a session and checking if a cookie is set.
     */
    session_start();

    if(isset($_COOKIE["Nelo"])) {
        $_SESSION['username'] = $_COOKIE["Nelo"];
        //header('Location: profile_main.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
 <head>
    <title>neLo - Online Lodging -</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript" src="resources/js/script.js"></script>
    <link rel="shortcut icon" href="resources/imagini/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="resources/css/modalDialog.css">
    <link rel="stylesheet" type="text/css" href="resources/css/mainbody.css">
    <link rel="stylesheet" type="text/css" href="resources/css/header-footer.css">


</head>

 <body>
 	<header class="nav-down">
        <div class="header-container">
 		<nav class="user-nav">
 			<div class="container">
 				<div class="panel-left">
 					<div class="user-logo-state">
                        <div class="loginAll">
     						Have an account?
     						<a href="#modalLogin" class="login" role="button">Login</a>
                            <div id="modalLogin" class="modalLogin">
                                <div>
                                    <a href="#closeLogin" title="Close" class="closeLogin">X</a>
                                    <div class="loginTitle">
                                        Login to neLo
                                    </div>
                                    <hr>
                                    <div class="loginForm">
    								 <form name="login" action="firstLogin.php" method="post" >
    								 Username: <input type="text" name="username"><br>
    								 Password: <input type="password" name="password" style="margin-left: 7px;"><br>
    								 <input type="submit" value="Submit">
    								 </form>
                                    </div>
                                    <hr>
                                    <div class="loginForgot">
                                        Forgot your password?
                                    </div>
                                </div>
                            </div>
 						|
                        </div>
                        <div class="drop">
                            <ul class="drop_menu">
                                <li><a href='#'>Sign Up</a>
                                    <ul>
                                        <li><a href='#modalSignupUser' class="register" role="button">User</a></li>
                                        <div id="modalSignupUser" class="modalSignupUser">
                                            <div>
                                                <a href="#closeSignupUser" title="Close" class="closeSignupUser">X</a>
                                                <div class="loginTitle">
                                                    Register User
                                                </div>
                                                <hr>
                                                <div class="loginForm">
                                                 <form name="login" action="register1.php" method="post" >
                                                    <div class="form1">
                                                        First Name: <input type="text" name="firstName"><br>
                                                        Adress: <input type="text" name="address" style="margin-left: 28px;"><br>
                                                        City: <input type="text" name="city" style="margin-left: 48px;"><br>
                                                        CNP: <input type="text" name="CNP" style="margin-left: 44px;"><br>
                                                        Mobile: <input type="text" name="mobile" style="margin-left: 28px;"><br><br>
                                                        Username: <input type="text" name="username" style="margin-left: 8px;"><br>
                                                        Email: <input type="email" name="email" style="margin-left: 38px;"><br>
                                                    </div>
                                                    <div class="form2">
                                                        Last Name: <input type="text" name="lastName" style="margin-left: 10px;"><br>
                                                        Location: <input type="text" name="location" style="margin-left: 24px;"><br>
                                                        Postal Code: <input type="text" name="postalCode"><br>
                                                        Birth Date: <input type="date" name="date" style="margin-left: 12.1px;"><br>
                                                        Phone: <input type="text" name="phone" style="margin-left: 40px;"><br><br>
                                                        Password: <input type="password" name="Password" style="margin-left: 19px;"><br><br>
														Confirm<br> Password<input type="password" name="Password" style="margin-left: 19px;"><br>
                                                        <input type="submit" value="Submit" style="float: right; width: 90px; height: 30px; font-weight: bold;"> 
                                                    </div>                              
                                                 </form>
                                                </div>
                                            </div>
                                        </div>

                                        <li><a href='#modalSignupHotel' class="register" role="button">Hotel</a></li>
                                        <div id="modalSignupHotel" class="modalSignupHotel">
                                            <div>
                                                <a href="#closeSignupHotel" title="Close" class="closeSignupHotel">X</a>
                                                <div class="loginTitle">
                                                    Register Hotel
                                                </div>
                                                <hr>
                                                <div class="loginForm">
                                                 <form name="login" action="register2.php" method="post" >
                                                    <div class="form1">
                                                        Hotel Name: <input type="text" name="hotelName"><br>
                                                        Location: <input type="text" name="location" style="margin-left: 24px;"><br>
                                                        Adress: <input type="text" name="address" style="margin-left: 33px;"><br>
                                                    </div>

                                                    <div class="form2">
                                                         Mobile: <input type="text" name="mobile"><br>
                                                         Phone: <input type="text" name="phone" style="margin-left: 8px;"><br><br>
                                                         <input type="submit" value="Submit" style="float: right; width: 90px; height: 30px; font-weight: bold;"> 
                                                    </div>  
                                                 </form>
                                                </div>
                                            </div>
                                        </div>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
 				<ul class="panel-right"></ul></div>
         </nav>

 		<nav class="menu-nav">
 			<div class="container">
 				<div class="panel-left">
                    <a href="index.php">
                        <img src="resources/css/images/logo.png">
                        </img></a></div>

 				<div class="panel-right">
                    <a href="index.php" title="Home" class="Button">Home</a>
                    <a href="search.php" title="Home" class="Button">Search</a>
                    <a href="contact.php" title="Home" class="Button">Contact Us</a>
                </div>
            </div>
         </nav> 
        </div>
    </header>
<!-- header -->

 	<div class="cover"></div>
<!-- cover image -->
 
 	

    <div id='main'>
        <article>
            <div class="heading">
                Hotels
                <span class="red"></span>
                <span class="yellow"></span>
                <span class="green"></span>
                <span class="blue"></span></div>

            <div class="hotel-block">
                <div class="block-body">
                    <a href="hotels.php">
                        <div class="imgWrap">
                            <img src="resources/imagini/bavaria.jpg" class="block-picture">
                            <p class="imgDescription">---------- Details ----------</p>
                        </div>
                    </a></div>
                <div class="block-footer">
                    <div class="hotel-detail">
                        <div class="hotel-name">Hotel Bavaria</div>
                        <div class="hotel-location"><img src="resources/imagini/location-icon.png" style="width:15px; height: 15px; margin-top: 1px; margin-right: 3px">Cluj</div>
                        <div class="hotel-type"><img src=""><img src="resources/imagini/type-icon.png" style="width:15px; height: 15px; margin-top: 1px; margin-right: 3px">Hotel</div></div>
                    <div class="rezervation">
                        <a href="#modalReservation">Book Now!</a>

                        <div id="modalReservation" class="modalReservation">
                            <div>
                                <a href="#closeReservation" title="Close" class="closeReservation">X</a>
                                Form Rezervation

                            </div>
                        </div>
                    </div>
                    <div class="hotel-description">
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi.</p>
                    </div></div></div>
            
        </article>
    <!--<aside>aside</aside>-->
    </div>
<!-- main body -->
    		
    <footer class="footer">
        <div class="footer-container">
            <ul class="footer-left">
                <li><a href="about.php"><h5>ABOUT US</h5></a></li>
                <li><a href="partners.php"><h5>PARTNERS</h5></a></li>
                <li><a href="contact.php"><h5>CONTACT US</h5></a></li>
            </ul>
            <div class="footer-right">
                <div class="telefon">
                    
                    <span><img src="resources/imagini/icon_phone.png">0232 201 XXX</span><br>
                    <a href="mailto:nelo@gmail.com" style="float: right;">neLo@gmail.com</a>
                    
                </div>
                
                <div class="footer-copywrite">
                    
                    <h5><a href="index.php"><img src="resources/imagini/footer-logo.png" height="42" width="129"></a><br>Universitatea Alexandru Ioan Cuza, Strada Gen. Berthelot 16, Iasi<br>Copyright 2014 | neLo</h5>
                </dvi>
            </div>
        </div>
    </footer>
<!-- footer -->
 </body>
</html>