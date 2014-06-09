


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
	<script type="text/javascript" src="app.js"></script>
	<script type="text/javascript" src="login.js"></script>
    <script type="text/javascript" src="inser.js"></script>
    <link rel="shortcut icon" href="resources/imagini/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="resources/css/modalDialog.css">
    <link rel="stylesheet" type="text/css" href="resources/css/mainbody.css">
    <link rel="stylesheet" type="text/css" href="resources/css/header-footer.css">
</head>
<body onload="insert(); remodel()">

<<<<<<< HEAD
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
                                                    <a href="#closeSignupUser" title="Close" class="closeSignupUser">X</a>
                                                    <div class="loginTitle">
                                                        Register User
                                                    </div>
                                                    <div class="loginForm">
                                                        <form name="login" action="" method="post" >
                                                            <div class="form1">
                                                                First Name: <input type="text"  id="u_firstName_id" maxlength="20" autocomplete="off" name="firstName" style="float: right; margin-left: 230px;"><hr><br>
                                                                Last Name: <input type="text"  id="u_lastname_id" maxlength="20" autocomplete="off" name="lastName" style="float: right;"><hr><br>
                                                                Adress: <input type="text" id="u_address_id" maxlength="20" autocomplete="off" name="address" style="float: right;"><hr><br>
                                                                Location: <input type="text"  id="u_location_id" maxlength="20" autocomplete="off" name="location" style="float: right;"><hr><br>
                                                                City: <input type="text" id="u_city_id" maxlength="20" autocomplete="off" name="city" style="float: right;"><hr><br>
                                                                Postal Code: <input type="text" id="u_postalCode_id" maxlength="20" autocomplete="off" name="postalCode" style="float: right;"><hr><br>
                                                                CNP: <input type="text" id="u_cnp_id" maxlength="20" autocomplete="off" name="CNP" style="float: right;"><hr><br>
                                                                Birth Date: <input type="date" id="u_birthDate_id" maxlength="20" autocomplete="off" name="date" style="float: right;"><hr><br>
                                                                Mobile: <input type="text" id="u_mobile_id" maxlength="20" autocomplete="off" name="mobile" style="float: right;"><hr><br>
                                                                Phone: <input type="text" id="u_phone_id" maxlength="20" autocomplete="off" name="phone" style="float: right;"><hr><br><br>

                                                                Username: <input type="text" onkeypress="ajaxFunction()" id="u_username_id" maxlength="20" autocomplete="off" name="username" style="float: right;"><hr><br>
                                                                Email: <input type="email" onkeypress="ajaxFunction()" id="u_email_id" maxlength="20" autocomplete="off" name="email" style="float: right;"><hr><br>
                                                                Password: <input type="password" onkeypress="ajaxFunction()"id="u_password_id" maxlength="20" autocomplete="off" name="Password" style="float: right;"><hr><br>
                                                                Confirm Password: <input type="password" onkeypress="ajaxFunction()" id="u_confirmPassword_id" maxlength="20" autocomplete="off" name="Password" style="float: right;"><hr><br>
                                                                <input type="submit"  onclick="ajaxFunction()" value="Register" class="login-button" style="float: right;"> 
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
                                                                Hotel Name: <input type="text" id="h_hotelName_id" maxlength="20" autocomplete="off"  name="hotelName" style="float: right; margin-left: 230px;"><hr><br>
                                                                Adress: <input type="text" id="h_address_id" maxlength="20" autocomplete="off" name="h_address" style="float: right;"><hr><br>
                                                                Contry: <input type="text" id="h_contry_id" maxlength="20" autocomplete="off" name="h_country" style="float: right;"><hr><br>
                                                                City: <input type="text" id="h_city_id" maxlength="20" autocomplete="off" name="h_city" style="float: right;"><hr><br>
                                                                Postal Code: <input type="text" id="h_psotalCode_id" maxlength="20" autocomplete="off" name="h_postalCode" style="float: right;"><hr><br>
                                                                Mobil: <input type="text" id="h_mobile_id" maxlength="20" autocomplete="off" name="h_mobile" style="float: right;"><hr><br>
                                                                Phone: <input type="text" id="h_phone_id" maxlength="20" autocomplete="off" name="h_phone" style="float: right;"><hr><br>
                                                                Fax: <input type="text" id="h_fax_id" maxlength="20" autocomplete="off" name="h_fax" style="float: right;"><hr><br><br>
                                                                Username: <input type="text" id="h_username_id" maxlength="20" autocomplete="off" name="h_username" style="float: right;"><hr><br>
                                                                Email: <input type="email" id="h_email_id" maxlength="20" autocomplete="off" name="h_email" style="float: right;"><hr><br>
                                                                Password: <input type="password" id="h_password_id" maxlength="20" autocomplete="off" name="h_password" style="float: right;"><hr><br>
                                                                Confirm Password: <input type="password" id="h_confirmPassword_id" maxlength="20" autocomplete="off" name="h_confirmPassword" style="float: right;"><hr><br>
                                                                <input type="button" onclick="" value="Register" class="login-button" style="float: right;">  
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
>>>>>>> 2cb28f2b5a9495e0412ab02b83c92b8962c44de4
<!-- header -->

 	<div class="cover"></div>
<!-- cover image -->
 
 	

    <div id='main'>
        <article id="main_article">
            
        </article>
    <!--<aside>aside</aside>-->
    </div>
<!-- main body -->
   <div id="footer"></div>
<!-- footer -->

<script> 
  $("#header").load("header.php"); 
  $("#footer").load("footer.php");
</script> 
 </body>
</html>