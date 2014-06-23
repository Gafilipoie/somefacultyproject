<?php


$host="fenrir.info.uaic.ro"; // Host name 
$db_username="NELO"; // Mysql username 
$db_password="sjOqapXt5L"; // Mysql password 
$db_name="NELO"; // Database name 
$tbl_name="user_login"; // users name 
$tblh_name="hotels";// hotels table
// Connect to server and select databse.
$dbhandle=mysqli_connect("$host", "$db_username", "$db_password")or die("cannot connect"); 
    $selected=mysqli_select_db($dbhandle,"$db_name")or die("cannot select DB");

$sh_hotelName=$_POST['sh_hotelName'];
$sh_username=$_POST['sh_username'];
$sh_address=$_POST['sh_address'];
$sh_city=$_POST['sh_city'];
$sh_postalCode=$_POST['sh_postalCode'];
$sh_mobile=$_POST['sh_mobile'];
$sh_fax=$_POST['sh_fax'];
$sh_phone=$_POST['sh_phone'];
$sh_email=$_POST['sh_email'];
$sh_password=$_POST['sh_password'];
$oldUserName=$_POST['oldUserName'];

$sh_hotelName = stripslashes($sh_hotelName);
$sh_username = stripslashes($sh_username);
$sh_address = stripslashes($sh_address);
$sh_city = stripslashes($sh_city);
$sh_postalCode = stripslashes($sh_postalCode);
$sh_mobile = stripslashes($sh_mobile);
$sh_fax = stripslashes($sh_fax);
$sh_phone = stripslashes($sh_phone);
$sh_email = stripslashes($sh_email);
$sh_password = stripslashes($sh_password);
$oldUserName = stripslashes($oldUserName);

$sql="UPDATE $tblh_name SET h_username='$sh_username', h_password='$sh_password', h_name='$sh_hotelName', h_mobile=$sh_mobile, h_phone=$sh_phone, h_fax=$sh_fax, h_email='$sh_email', h_city='$sh_city', h_address='$sh_address'  WHERE h_username='$oldUserName';";
$result=mysqli_query( $dbhandle,$sql)or die(mysql_error());
	


?>