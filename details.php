<?php
$host="fenrir.info.uaic.ro"; // Host name 
$db_username="NELO"; // Mysql username 
$db_password="sjOqapXt5L"; // Mysql password 
$db_name="NELO"; // Database name 
$tbl_name="user_login"; // users name 
$tblh_name="hotels";// hotels table
$toReturn="";
// Connect to server and select databse.
   $dbhandle=mysqli_connect("$host", "$db_username", "$db_password")or die("cannot connect"); 
    $selected=mysqli_select_db($dbhandle,"$db_name")or die("cannot select DB");


$hotel=$_POST['hotel']; 
$sql="SELECT * FROM $tblh_name WHERE ID_Hotel='$hotel'";
$result=mysqli_query( $dbhandle,$sql);
$count=mysqli_num_rows($result);


while ($row = mysqli_fetch_row($result)) {
        $toReturn=$toReturn.$row[5].'|'.$row[11].'|'.$row[4].'|'.$row[21].'|'.$row[20].'|'.$row[0].'|'.$row[15].'|'.$row[16].'|'.$row[17].'|'.$row[18].'|'.$row[19].'|'.$row[20];
         
    }



echo $toReturn;

?>