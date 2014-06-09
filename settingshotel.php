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
    <link rel="stylesheet" type="text/css" href="resources/css/settings.css">
</head>

 <body>
  <div id="header"></div><br />
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
                <input type="text" id="sh_hotelName" name="username" style="float: right;">
                <hr>
                <div class="info">Username</div>
                <input type="text" id="sh_username" name="username" style="float: right;">
                <hr>
                <div class="info">Adress</div>
                <input type="text" id="sh_address" name="username" style="float: right;">
                <hr>
                <div class="info">City</div>
                <input type="text"  id="sh_city"name="username" style="float: right;">
                <hr>
                <div class="info">Country</div>
                <input type="text" id="sh_contry" name="username" style="float: right;">
                <hr>
                <div class="info">Postal Code</div>
                <input type="text"  id="sh_postalCode" name="username" style="float: right;">
                <hr>
                <div class="info">Mobile</div>
                <input type="text" id="sh_mobile" name="username" style="float: right;">
                <hr>
                <div class="info">Phone</div>
                <input type="text" id="sh_phone" name="username" style="float: right;">
                <hr>
                <div class="info">Fax</div>
                <input type="text" id="sh_fax" name="username" style="float: right;">
                <hr>
                <div class="info">Email Adress</div>
                <input type="text"  id="sh_email" name="username" style="float: right;">
                <hr>
                <div class="info">Password</div>
                <input type="text"  id="sh_password" name="username" style="float: right;">
                <hr>
                <div class="info">Facilities</div>
                <form name="facilities"  action="" method="" class="form">
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

  <div id="footer"></div>
<!-- footer -->
<script> 
  $("#header").load("header.php"); 
  $("#footer").load("footer.php"); 
  $(document).ready("remodel()");
</script> 
 </body>
</html>