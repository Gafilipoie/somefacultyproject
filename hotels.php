<!DOCTYPE html>
<html lang="en">
 <head>
    <title>neLo - Online Lodging -</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript" src="resources/js/script.js"></script>
    <link rel="shortcut icon" href="resources/imagini/favicon.ico" />
    <script type="text/javascript" src="login.js"></script>
    <link rel="stylesheet" type="text/css" href="resources/css/modalDialog.css">
    <link rel="stylesheet" type="text/css" href="resources/css/mainbody.css">
    <link rel="stylesheet" type="text/css" href="resources/css/header-footer.css">
</head>

<<<<<<< HEAD
 <body onload="remodel()">
   <div id="header"></div><br />
=======
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
                                        <div class="hr"></div>
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
                                                    <div class="hr"></div>
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
                                                    <div class="hr"></div>
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
                    <a href="#" class="account-settings">Marius</a>
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
>>>>>>> 2cb28f2b5a9495e0412ab02b83c92b8962c44de4
<!-- header -->
<script> 
  $("#header").load("header.php"); 
  $("#footer").load("footer.php"); 
  $(document).ready("remodel()");
</script> 
    <div class="cover"></div>
<!-- cover image -->

    <div id='main'>
        <article>
            <div class="heading">
                'Hotel Title Parameter'
                <span class="red"></span>
                <span class="yellow"></span>
                <span class="green"></span>
                <span class="blue"></span>
            </div>
            
        </article>
    <!--<aside>aside</aside>-->
    </div>
<!-- main body -->
<div id="footer"></div>

<!-- footer -->

 </body>
</html>