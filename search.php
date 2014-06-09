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

 <body onload="remodel()">
  <div id="header"></div><br />
<!-- header -->
    <div class="cover"></div>
<!-- cover image -->

    <div id='main'>
        <article class="background">
            <div class="heading">
                Search
                <hr>
            </div>
            <div class="container">
                <div class="search-box">
                    <form name="search-box" action="" method="">
                        
                            Destination/Hotel Name:<br> 
                            <input type="search" name="search" size="25" autocomplete="off" placeholder="e.g. City or Specific Hotel">
                        <br>
                            Buget between:<br> 
                            <input type="range" name="amountRange" min="0" max="500" value="0" step="10" oninput="this.form.amountInput.value=this.value" />
                            <input type="number" name="amountInput" min="0" max="500" value="0" step="10" oninput="this.form.amountRange.value=this.value" /><br>
                            And<br>
                            <input type="range" name="amountRange2" min="0" max="500" value="0" step="10" oninput="this.form.amountInput2.value=this.value" />
                            <input type="number" name="amountInput2" min="0" max="500" value="0" step="10" oninput="this.form.amountRange2.value=this.value" />
                        <br>
                            Check-in Date:<br>
                            <input type="date" name="date"><br>
                            Check-out Date:<br>
                            <input type="date" name="date">
                        <br>
                            Rooms: <input type="number" name="number" min="0" max="30" value="0" step="1">
                            Beds: <input type="number" name="number" min="0" max="30" value="0" step="1">
                        <br>
                            <input type="submit" value="Search" name="search">
                    </form>
                </div>
                <br>
                <div class="search-result">
                    <div class="hotel-block">
                        <div class="block-body">
                            <a href="hotels.php">
                                <div class="imgWrap">
                                    <img src="resources/imagini/bavaria.jpg" class="block-picture">
                                    <p class="imgDescription">---------- Details ----------</p>
                                </div>
                            </a>
                        </div>
                        <div class="block-footer">
                            <div class="hotel-detail">
                                <div class="hotel-name">Hotel Bavaria</div>
                                <div class="hotel-location"><img src="resources/imagini/location-icon.png" style="width:15px; height: 15px; margin-top: 1px; margin-right: 3px">Cluj</div>
                                <div class="hotel-type"><img src=""><img src="resources/imagini/type-icon.png" style="width:15px; height: 15px; margin-top: 1px; margin-right: 3px">Hotel</div>
                            </div>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    <!--<aside>aside</aside>-->
    </div>
<!-- main body -->
<div id="footer"></div>
<!-- footer -->
<script> 
  $("#header").load("header.php"); 
  $("#footer").load("footer.php"); 
  $(document).ready("remodel()");
</script> 
 </body>
</html>