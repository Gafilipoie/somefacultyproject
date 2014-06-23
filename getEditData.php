<?php
$username=$_POST['username']; 
$host="fenrir.info.uaic.ro"; // Host name 
$db_username="NELO"; // Mysql username 
$db_password="sjOqapXt5L"; // Mysql password 
$db_name="NELO"; // Database name 
$tbl_name="user_login"; // users name 
$tblh_name="hotels";// hotels table
// Connect to server and select databse.
   $dbhandle=mysqli_connect("$host", "$db_username", "$db_password")or die("cannot connect"); 
    $selected=mysqli_select_db($dbhandle,"$db_name")or die("cannot select DB");



$sql="SELECT * FROM $tbl_name WHERE username='$username'";
$result=mysqli_query( $dbhandle,$sql);
$count=mysqli_num_rows($result);
$result = mysqli_fetch_array($result);
$toReturn =$result['FirstName'].'|'.$result['LastName'].'|'.$result['Mobile'].'|'.$result['Address'].'|'.$result['email'];
echo $toReturn;

?>