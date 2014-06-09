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
        <article>
            <div class="settings-heading">
                <div class="title">Settings</div>
            </div>
            <div class="settings-main">
                <div class="subtitle">Personal details</div>
                <div class="edit"><a href="#" class="edit">Edit</a></div>
                <hr>
                <div class="info">Name</div>
                <input type="text" id="su_name"  style="float: right;">
                <hr>
                <div class="info">Username</div>
                <input type="text" id="su_username"  style="float: right;">
                <hr>
                <div class="info">Adress</div>
                <input type="text" id="su_address"  style="float: right;">
                <hr>
                <div class="info">City</div>
                <input type="text" id="su_city"  style="float: right;">
                <hr>
                <div class="info">Country</div>
                <input type="text" id="su_country"  style="float: right;">
                <hr>
                <div class="info">Postal Code</div>
                <input type="text" id="su_postalCode"  style="float: right;">
                <hr>
                <div class="info">CNP</div>
                <input type="text" id="su_cnp"  style="float: right;">
                <hr>
                <div class="info">Birth Date</div>
                <input type="text" id="su_birthDate"  style="float: right;">
                <hr>
                <div class="info">Mobile</div>
                <input type="text" id="su_mobile"  style="float: right;">
                <hr>
                <div class="info">Phone</div>
                <input type="text" id="su_phone"  style="float: right;">
                <hr>
                <div class="info">Email Adress</div>
                <input type="text" id="su_email"  style="float: right;">
                <hr>
                <div class="info">Password</div>
                <input type="text" id="su_password"  style="float: right;">
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