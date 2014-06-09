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

 <body>
  <div id="header"></div><br />
<!-- header -->

    <div class="cover"></div>
<!-- cover image -->

    <div id='main'>
        <article class="background">
            <div class="heading">
                Contact Us
                <hr>
            </div>
            <div class="container">
                <div class="contact-info">
                    <h4>ROMANIA - IASI</h4>
                    <p>Universitatea Alexandru Ioan Cuza<br>
                    Strada Gen. Berthelot 16<br>
                    Iasi<br><br>
                    T: 0232 201 XXX<br>
                    E: <a href="mailto:the.nelo.web@gmail.com">the.nelo.web@gmail.com</a></p>
                </div>
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2712.176948355454!2d27.574910999999997!3d47.173972000000006!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x193e4b6864504e2c!2sFacultatea+de+Informatic%C4%83!5e0!3m2!1sro!2sro!4v1401995238775" width="400" height="300" frameborder="0" style="border:0"></iframe>
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