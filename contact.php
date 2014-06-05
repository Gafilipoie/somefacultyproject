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
                                    <div class="loginForm">
                                     <form name="login" action="firstLogin.php" method="post" >
                                     Username: <input type="text" name="username"><br>
                                     Password: <input type="password" name="password" style="margin-left: 7px;"><br>
                                     <input type="submit" value="Login" class="login-button">
                                     </form>
                                    </div>
                                    <hr>
                                    <div class="loginForgot">
                                        <a href="#">Forgot your password?</a>
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
                                                <div class="loginForm">
                                                 <form name="login" action="register1.php" method="post" >
                                                    <div class="form1">
                                                        First Name: <input type="text" name="firstName"><br>
                                                        Adress: <input type="text" name="address" style="margin-left: 28px;"><br>
                                                        City: <input type="text" name="city" style="margin-left: 48px;"><br>
                                                        CNP: <input type="text" name="CNP" style="margin-left: 44px;"><br>
                                                        Mobile: <input type="text" name="mobile" style="margin-left: 28px;"><br><br>
                                                    </div>
                                                    <div class="form2">
                                                        Last Name: <input type="text" name="lastName" style="margin-left: 49px;"><br>
                                                        Location: <input type="text" name="location" style="margin-left: 63px;"><br>
                                                        Postal Code: <input type="text" name="postalCode" style="margin-left: 41px;"><br>
                                                        Birth Date: <input type="date" name="date" style="margin-left: 51px;"><br>
                                                        Phone: <input type="text" name="phone" style="margin-left: 79px;"><br><br>
                                                    </div>
                                                    <div class="form3">
                                                        Username: <input type="text" name="username" style="margin-left: 8px;">
                                                        Email: <input type="email" name="email" style="margin-left: 82px;"><br>
                                                        Password: <input type="password" name="Password" style="margin-left: 13px;">
                                                        Confirm Password: <input type="password" name="Password" style="margin-left: 0px;"><br><br>
                                                        <input type="submit" value="Register" class="login-button"> 
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
                                                <div class="loginForm">
                                                 <form name="login" action="register2.php" method="post" >
                                                    <div class="form1">
                                                        Hotel Name: <input type="text" name="hotelName"><br>
                                                        Contry: <input type="text" name="h_country" style="margin-left: 36px;"><br>
                                                        City: <input type="text" name="h_city" style="margin-left: 54px;"><br>
                                                        Postal Code: <input type="text" name="h_postalCode">
                                                    </div>
                                                    <div class="form2">
                                                        Adress: <input type="text" name="h_address" style="margin-left: 77px;"><br>
                                                        Mobil: <input type="text" name="h_mobile" style="margin-left: 85px;"><br>
                                                        Phone: <input type="text" name="h_phone" style="margin-left: 83px;"><br>
                                                        Fax: <input type="text" name="h_fax" style="margin-left: 100px;"><br><br>
                                                    </div>
                                                    <div class="form3">
                                                        Username: <input type="text" name="h_username" style="margin-left: 15px;">
                                                        Email: <input type="email" name="h_email" style="margin-left: 85px;"><br>
                                                        Password: <input type="password" name="h_password" style="margin-left: 20px;">
                                                        Confirm Password: <input type="password" name="h_confirmPassword"><br>
                                                        <input type="submit" value="Register" class="login-button" style="margin-top: 66px;">  
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
                <div class="panel-right"><a href="#" class="account-settings">Marius</a></div></div>
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
                Contact Us
                <span class="red"></span>
                <span class="yellow"></span>
                <span class="green"></span>
                <span class="blue"></span>
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
                    <a href="mailto:nelo@gmail.com" style="float: right;">neLo@gmail.com</a>
                    
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