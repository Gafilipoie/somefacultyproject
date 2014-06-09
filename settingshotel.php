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
    <link rel="stylesheet" type="text/css" href="resources/css/settings.css">
</head>

 <body>
    <header class="nav-down">
        <div class="header-container">
        <nav class="user-nav">
            <div class="container">
                <div class="panel-left">
                    <div class="user-logo-state">
                        <div class="loginAll">
                            <div class="containe">
                                <p>Have an account?</p>
                                <a href="#modalLogin" class="login" role="button">Login</a>
                                <div id="modalLogin" class="modalLogin">
                                    <div>
                                        <a href="#closeLogin" title="Close" class="closeLogin">X</a>
                                        <div class="loginTitle">
                                            Login to neLo
                                        </div>
                                        <div class="loginForm">
                                            <form name="login" action="firstLogin.php" method="post" >
                                                Username: <input type="text" name="username"><br>
                                                Password: <input type="password" name="password" style="margin-left: 7px;"><br>
                                                <input type="submit" value="Login" class="login-button">
                                            </form>
                                        </div>
                                        <div class="hr">Wrong Username or Password!</div>
                                        <div class="loginForgot">
                                            <a href="#">Forgot your password?</a>
                                        </div>
                                    </div>
                                </div>
                                <p>|</p>
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
                                                    <div class="loginForm">
                                                        <form name="login" action="register1.php" method="post" >
                                                            <div class="form1">
                                                                First Name: <input type="text" name="firstName" style="float: right; margin-left: 230px;"><hr><br>
                                                                Last Name: <input type="text" name="lastName" style="float: right;"><hr><br>
                                                                Adress: <input type="text" name="address" style="float: right;"><hr><br>
                                                                Location: <input type="text" name="location" style="float: right;"><hr><br>
                                                                City: <input type="text" name="city" style="float: right;"><hr><br>
                                                                Postal Code: <input type="text" name="postalCode" style="float: right;"><hr><br>
                                                                CNP: <input type="text" name="CNP" style="float: right;"><hr><br>
                                                                Birth Date: <input type="date" name="date" style="float: right;"><hr><br>
                                                                Mobile: <input type="text" name="mobile" style="float: right;"><hr><br>
                                                                Phone: <input type="text" name="phone" style="float: right;"><hr><br><br>

                                                                Username: <input type="text" name="username" style="float: right;"><hr><br>
                                                                Email: <input type="email" name="email" style="float: right;"><hr><br>
                                                                Password: <input type="password" name="Password" style="float: right;"><hr><br>
                                                                Confirm Password: <input type="password" name="Password" style="float: right;"><hr><br>
                                                                <input type="submit" value="Register" class="login-button" style="float: right;"> 
                                                            </div>                          
                                                        </form>
                                                    </div>
                                                    <div class="hr">Wrong Username or Password!</div>
                                                </div>
                                            </div>

                                            <li><a href='#modalSignupHotel' class="register" role="button">Hotel</a></li>
                                            <div id="modalSignupHotel" class="modalSignupHotel">
                                                <div>
                                                    <a href="#closeSignupHotel" title="Close" class="closeSignupHotel">X</a>
                                                    <div class="loginTitle">
                                                        Register Hotel
                                                    </div>
                                                    <div class="loginForm">
                                                        <form name="login" action="register2.php" method="post" >
                                                            <div class="form1">
                                                                Hotel Name: <input type="text" name="hotelName" style="float: right; margin-left: 230px;"><hr><br>
                                                                Adress: <input type="text" name="h_address" style="float: right;"><hr><br>
                                                                Contry: <input type="text" name="h_country" style="float: right;"><hr><br>
                                                                City: <input type="text" name="h_city" style="float: right;"><hr><br>
                                                                Postal Code: <input type="text" name="h_postalCode" style="float: right;"><hr><br>
                                                                Mobil: <input type="text" name="h_mobile" style="float: right;"><hr><br>
                                                                Phone: <input type="text" name="h_phone" style="float: right;"><hr><br>
                                                                Fax: <input type="text" name="h_fax" style="float: right;"><hr><br><br>
                                                                Username: <input type="text" name="h_username" style="float: right;"><hr><br>
                                                                Email: <input type="email" name="h_email" style="float: right;"><hr><br>
                                                                Password: <input type="password" name="h_password" style="float: right;"><hr><br>
                                                                Confirm Password: <input type="password" name="h_confirmPassword" style="float: right;"><hr><br>
                                                                <input type="submit" value="Register" class="login-button" style="float: right;">  
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="hr">Wrong Username or Password!</div>
                                                </div>
                                            </div>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-right">
                    <ul class="drop_menu">
                        <li><a href="#" class="account-settings">Marius</a>
                            <ul>
                                <li><div>Gaby Marius</div></li>
                                <li><hr></li>
                                <li><a href="#">Settings</a></li>
                                <li><a href="#">Sign Out</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <nav class="menu-nav">
            <div class="container">
                <div class="panel-left">
                    <a href="index.php">
                        <img src="resources/css/images/logo.png"></img>
                    </a>
                </div>

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
    <br><br>
    <div id='main'>
        <article class="background">
            <div class="settings-heading">
                <div class="title">Settings</div>
            </div>
            <div class="settings-main">
                <div class="subtitle">Personal details</div>
                <div class="edit"><a href="#" class="edit">Edit</a></div>
                <hr>
                <div class="info">Hotel Name</div>
                <div class="edit">To be edited</div>
                <hr>
                <div class="info">Username</div>
                <div class="edit">To be edited</div>
                <hr>
                <div class="info">Adress</div>
                <div class="edit">To be edited</div>
                <hr>
                <div class="info">City</div>
                <div class="edit">To be edited</div>
                <hr>
                <div class="info">Country</div>
                <div class="edit">To be edited</div>
                <hr>
                <div class="info">Postal Code</div>
                <div class="edit">To be edited</div>
                <hr>
                <div class="info">Mobile</div>
                <div class="edit">To be edited</div>
                <hr>
                <div class="info">Phone</div>
                <div class="edit">To be edited</div>
                <hr>
                <div class="info">Fax</div>
                <div class="edit">To be edited</div>
                <hr>
                <div class="info">Email Adress</div>
                <div class="edit">To be edited</div>
                <hr>
                <div class="info">Password</div>
                <div class="edit">To be edited</div>
                <hr>
                <div class="info">Facilities</div>
                <form name="facilities" action="" method="" class="form">
                        <div class="edit_checkbox">
                            <input type="checkbox" name="piscina"> Piscina
                            <input type="checkbox" name="Parcare" style="margin-left: 38px;"> Parcare
                            <input type="checkbox" name="lift" style="margin-left: 30px;"> Lift
                            <input type="checkbox" name="restaurant" style="margin-left: 63px;"> Restaurant<br>
                            <input type="checkbox" name="plaja_privata"> Plaja Privata
                            <input type="checkbox" name="spa"> Spa
                            <input type="checkbox" name="sala_fitness" style="margin-left: 55px;"> Sala Fitness
                            <input type="checkbox" name="sala_forta"> Sala Forta<br>
                            <input type="checkbox" name="jacuzzi"> Jacuzzi
                            <input type="checkbox" name="internet" style="margin-left: 39px;"> Internet
                            <input type="checkbox" name="bar" style="margin-left: 32px;"> Bar
                            <input type="checkbox" name="sauna" style="margin-left: 60px;"> Sauna<br>
                            <input type="checkbox" name="foisor"> Foisor
                            <input type="checkbox" name="teren_sport" style="margin-left: 43px;"> Teren Sport
                            <input type="checkbox" name="terasa"> Terasa
                            <input type="checkbox" name="gratar" style="margin-left: 37px;"> Gratar
                        </div>
                </form>    
                <hr>
                <div class="edit"><a href="#" class="edit">Save</a></div>
            </div>
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
                    <a href="mailto:the.nelo.web@gmail.com" style="float: right;">the.nelo.web@gmail.com</a>
                    
                </div>
                
                <div class="footer-copywrite">
                    
                    <h5><a href="index.php"><img src="resources/imagini/footer-logo.png" height="42" width="129"></a><br>Universitatea Alexandru Ioan Cuza, Strada Gen. Berthelot 16, Iasi<br>Copyright 2014 | neLo</h5>
                </div>
            </div>
        </div>
    </footer>
<!-- footer -->
 </body>
</html>