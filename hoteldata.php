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



$sql="SELECT * FROM $tblh_name";
$result=mysqli_query( $dbhandle,$sql);
$count=mysqli_num_rows($result);

$toReturn=$count.'|';
while ($row = mysqli_fetch_array($result)) {
        
       $toReturn=$toReturn.$row['h_name'].'|'.$row['h_city'].'|'.$row['h_htype'].'|'.$row['h_descriere'].'|'.$row['h_logo'].'|'.$row['ID_Hotel'];
        $toReturn=$toReturn.'+';
    }



echo $toReturn;

?>