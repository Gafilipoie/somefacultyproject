


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
<body onload="insert(5)">

 	<div id="header"></div><br />
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