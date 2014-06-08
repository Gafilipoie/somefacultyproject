<?php

session_start();
header("location:hotels.php");

$h_username = $_POST['h_username'];
$h_password = $_POST['h_password'];
$h_name = $_POST['h_name'];
$h_mobile = $_POST['h_mobile'];
$h_phone = $_POST['h_phone'];
$h_fax = $_POST['h_fax'];
$h_email = $_POST['h_email'];
$h_country = $_POST['h_country'];
$h_city = $_POST['h_city'];
$h_address = $_POST['h_address'];
$h_postalCode = $_POST['h_postalCode'];



$h_username = stripslashes($h_username);
$h_username = mysql_real_escape_string($h_username);

$h_password = stripslashes($h_password);
$h_password = mysql_real_escape_string($h_password);

$h_name = stripslashes($h_name);
$h_name = mysql_real_escape_string($h_name);

$h_mobile = stripslashes($h_mobile);
$h_mobile = mysql_real_escape_string($h_mobile);

$h_phone = stripslashes($h_phone);
$h_phone = mysql_real_escape_string($h_phone);

$h_fax = stripslashes($h_fax);
$h_fax = mysql_real_escape_string($h_fax);

$h_email = stripslashes($h_email);
$h_email = mysql_real_escape_string($h_email);

$h_country = stripslashes($h_country);
$h_country = mysql_real_escape_string($h_country);

$h_city = stripslashes($h_city);
$h_city = mysql_real_escape_string($h_city);

$h_address = stripslashes($h_address);
$h_address = mysql_real_escape_string($h_address);

$h_postalCode = stripslashes($h_postalCode);
$h_postalCode = mysql_real_escape_string($h_postalCode);

$sql="INSERT INTO Hotels VALUES (508627,'$h_username',$h_password,null,'$h_name',$h_mobile,$h_phone,$h_fax,'$h_email','$h_country','$h_city','$h_address',$h_postalCode);";
$result=mysql_query($sql);
?>