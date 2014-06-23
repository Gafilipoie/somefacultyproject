<!DOCTYPE html>
<html lang="en">
<head>
    <title>neLo - Online Lodging -</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript" scr="https://code.google.com/p/jquery-ui/source/browse/trunk/ui/i18n/jquery.ui.datepicker-ro.js"  ></script>
    <script type="text/javascript" src="resources/js/script.js"></script>
    <script src="http://crypto-js.googlecode.com/svn/tags/3.1.2/build/rollups/aes.js"></script>
	<script type="text/javascript" src="app.js"></script>
    <script type="text/javascript" src="register.js"></script>
    <script type="text/javascript" src="app1.js"></script>
	<script type="text/javascript" src="login.js"></script>
    <script type="text/javascript" src="inser.js"></script>
    <script type="text/javascript" src="nav.js"></script>
    <link rel="shortcut icon" href="resources/imagini/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="resources/css/modalDialog.css">
    <link rel="stylesheet" type="text/css" href="resources/css/mainbody.css">
    <link rel="stylesheet" type="text/css" href="resources/css/header-footer.css">
    <link rel="stylesheet" type="text/css" href="resources/css/search.css">
    <link rel="stylesheet" type="text/css" href="resources/css/about.css">
    <link rel="stylesheet" type="text/css" href="resources/css/partners.css">
    <link rel="stylesheet" type="text/css" href="resources/css/contact.css">
    <link rel="stylesheet" type="text/css" href="resources/css/mainHeading.css">
    <link rel="stylesheet" type="text/css" href="resources/css/gallery.css">
    <link rel="stylesheet" type="text/css" href="resources/css/settings.css">
</head>

<body onload="insert(); remodel()">
     
    <div id="header">
        <header  class="nav-down">
            <div  class="header-container">
                <nav class="user-nav">
                <div class="container">
                    <div  id="left" class="panel-left" >
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
                                                <form name="login" action="" method="post" >
                                                    Username: <input type="text" id="username" name="username"><br>
                                                    Password: <input type="password" id="password" name="password" style="margin-left: 7px;"><br>
                                                    <input type="button" onclick="userLogin()" value="Login" class="login-button">
                                                </form>
                                            </div>
                                            <div class="hr" id="login_error"></div>
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
                                                        <a href="#closeSignupUser" title="Close" id="closeuser" class="closeSignupUser">X</a>
                                                        <div class="loginTitle">
                                                            Register User
                                                        </div>
                                                        <div class="loginForm">
                                                            <form name="login" action="" method="post" >
                                                                <div class="form1">
                                                                    First Name: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text"  id="u_firstName_id" maxlength="40" autocomplete="off" name="firstName" style="float: right;"><hr>
                                                                    Last Name: <input type="text"  id="u_lastname_id" maxlength="40" autocomplete="off" name="lastName" style="float: right;"><hr>
                                                                    Adress: <input type="text" id="u_address_id" maxlength="40" autocomplete="off" name="address" style="float: right;"><hr>
                                                                    Location: <input type="text"  id="u_location_id" maxlength="40" autocomplete="off" name="location" style="float: right;"><hr>
                                                                    City: <input type="text" id="u_city_id" maxlength="40" autocomplete="off" name="city" style="float: right;"><hr>
                                                                    Postal Code: <input type="text" id="u_postalCode_id" maxlength="40" autocomplete="off" name="postalCode" style="float: right;"><hr>
                                                                    CNP: <input type="text" id="u_cnp_id" maxlength="40" autocomplete="off" name="CNP" style="float: right;"><hr>
                                                                    Birth Date: <input type="date" id="u_birthDate_id" maxlength="40" autocomplete="off" name="date" style="float: right;"><hr>
                                                                    Mobile: <input type="text" id="u_mobile_id" maxlength="40" autocomplete="off" name="mobile" style="float: right;"><hr>
                                                                    Phone: <input type="text" id="u_phone_id" maxlength="40" autocomplete="off" name="phone" style="float: right;"><hr><br>

                                                                    Username: <input type="text" onkeypress="ajaxFunction()" id="u_username_id" maxlength="40" autocomplete="off" name="username" style="float: right;"><hr>
                                                                    Email: <input type="email" onkeypress="ajaxFunction()" id="u_email_id" maxlength="40" autocomplete="off" name="email" style="float: right;"><hr>
                                                                    Password: <input type="password" onkeypress="ajaxFunction()"id="u_password_id" maxlength="40" autocomplete="off" name="Password" style="float: right;"><hr>
                                                                    Confirm Password: <input type="password" onkeypress="ajaxFunction()" id="u_confirmPassword_id" maxlength="40" autocomplete="off" name="Password" style="float: right;"><hr>
                                                                    <input type="button"  onclick="ajaxFunction()" value="Register" class="login-button" style="float: right;"> 
                                                                </div>                          
                                                            </form>
                                                        </div>
                                                        <div class="hr" id="u_error"></div>
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
                                                            <form name="login" action=""  method="post" >
                                                                <div class="form1">
                                                                    Hotel Name: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="h_hotelName_id" maxlength="40" autocomplete="off"  name="hotelName" style="float: right;"><hr>
                                                                    Adress: <input type="text" id="h_address_id" maxlength="40" autocomplete="off" name="h_address" style="float: right;"><hr>
                                                                    Contry: <input type="text" id="h_contry_id" maxlength="40" autocomplete="off" name="h_country" style="float: right;"><hr>
                                                                    City: <input type="text" id="h_city_id" maxlength="40" autocomplete="off" name="h_city" style="float: right;"><hr>
                                                                    Postal Code: <input type="text" id="h_postalCode_id" maxlength="40" autocomplete="off" name="h_postalCode" style="float: right;"><hr>
                                                                    Mobil: <input type="text" id="h_mobile_id" maxlength="40" autocomplete="off" name="h_mobile" style="float: right;"><hr>
                                                                    Phone: <input type="text" id="h_phone_id" maxlength="40" autocomplete="off" name="h_phone" style="float: right;"><hr>
                                                                    Fax: <input type="text" id="h_fax_id" maxlength="40" autocomplete="off" name="h_fax" style="float: right;"><hr><br>
                                                                    Username: <input type="text"  onkeypress="ajaxFunction_h()" id="h_username_id" maxlength="40" autocomplete="off" name="h_username" style="float: right;"><hr>
                                                                    Email: <input type="email"  onkeypress="ajaxFunction_h()" id="h_email_id" maxlength="40" autocomplete="off" name="h_email" style="float: right;"><hr>
                                                                    Password: <input type="password"  onkeypress="ajaxFunction_h()" id="h_password_id" maxlength="40" autocomplete="off" name="h_password" style="float: right;"><hr>
                                                                    Confirm Password: <input type="password"  onkeypress="ajaxFunction_h()" id="h_confirmPassword_id" maxlength="40" autocomplete="off" name="h_confirmPassword" style="float: right;"><hr>
                                                                    <input type="button" onclick="ajaxFunction_h()" value="Register" class="login-button" style="float: right;">  
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="hr" id="h_error"></div>
                                                    </div>
                                                </div>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div  id="right" class="panel-right">
                        <ul class="drop_menu">
                            <li><a href="#" id="userNameButton1"  class="account-settings"></a>
                                <ul>
                                    <li><div id="userNameButton2"></div></li>
                                    <li><hr></li>
                                    <li><a id="settings" onclick="gotoSettings();">Settings</a></li>
                                    <li><a id="logout" onclick="logmeout()">Sign Out</a></li>
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
                        <a id="home" onclick="insert()"  title="Home" class="Button">Home</a>
                        <a id="search" onclick="gotoSearch()"   title="Home" class="Button">Search</a>
                        <a id="contact" onclick="gotoContactUs()"  title="Home" class="Button">Contact Us</a>
                    </div>
                </div>
                </nav> 
            </div>
        </header>
    </div>
    <br/>
<!-- header -->

    <div class="cover"></div>
<!-- cover image -->
 <div id='main_article'>
        <article id="main">
            
        </article>
    </div>
<!-- main body -->

   <div id="footer">

   </div>
<!-- footer -->


 </body>
</html>