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



$i=$_POST['i'];

$sql="SELECT * FROM $tbl_name WHERE username='$username'";
$sqlh="SELECT * FROM $tblh_name WHERE h_username='$username'";
if($i==1){
$result=mysqli_query( $dbhandle,$sql);
$count=mysqli_num_rows($result);
$result = mysqli_fetch_array($result);
$tor=$result['FirstName'].'|'.$result['username'].'|'.$result['Address'].'|'.$result['City'].'|'.$result['Postal_Code'].'|'.$result['CNP'].'|'.$result['Data'].'|'.$result['Mobile'].'|'.$result['Phone'].'|'.$result['email']; 
echo $tor;

}

if($i==2){
$result=mysqli_query( $dbhandle,$sqlh);
$count=mysqli_num_rows($result);
$result = mysqli_fetch_array($result);
$tor=$result['h_name'].'|'.$result['h_username'].'|'.$result['h_address'].'|'.$result['h_city'].'|'.$result['h_postalCode'].'|'.$result['h_mobile'].'|'.$result['h_phone'].'|'.$result['h_fax'].'|'.$result['h_email'].'|'.$result['h_nrCamere']; 
echo $tor;
}


?>