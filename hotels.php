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