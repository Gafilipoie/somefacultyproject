


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
    <link rel="shortcut icon" href="resources/imagini/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="resources/css/modalDialog.css">
    <link rel="stylesheet" type="text/css" href="resources/css/mainbody.css">
    <link rel="stylesheet" type="text/css" href="resources/css/header-footer.css">
</head>
<body >

 	<div id="header"></div><br />
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
   <div id="footer"></div>
<!-- footer -->
<script> 
  $("#header").load("header.php"); 
  $("#footer").load("footer.php");
</script> 
 </body>
</html>