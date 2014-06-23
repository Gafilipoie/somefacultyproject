<?php

$host="fenrir.info.uaic.ro"; // Host name 
$db_username="NELO"; // Mysql username 
$db_password="sjOqapXt5L"; // Mysql password 
$db_name="NELO"; // Database name 
$tbl_name="user_login"; // users name 
$tblh_name="hotels";// hotels table

$searchVar=$_POST['searchVar'];
$rangeVal1=$_POST['rangeVal1'];
$rangeVal2=$_POST['rangeVal2'];


$searchVar = stripslashes($searchVar);
$searchVar = stripslashes($searchVar);
$rangeVal2 = stripslashes($rangeVal2);


$dbhandle=mysqli_connect("$host", "$db_username", "$db_password")or die("cannot connect"); 
    $selected=mysqli_select_db($dbhandle,"$db_name")or die("cannot select DB");

$sql="SELECT * FROM $tblh_name WHERE UPPER(h_name) LIKE '%".$searchVar."%' OR UPPER(h_city) LIKE '%".$searchVar."%';";


$result=mysqli_query( $dbhandle,$sql);
$count=mysqli_num_rows($result);
$toString=$count.'|';
while($row=mysqli_fetch_array($result)){

	 $toString=$toString.$row['h_name'].'|'.$row['h_city'].'|'.$row['h_htype'].'|'.$row['h_descriere'].'|'.$row['h_logo'];
         $toString=$toString.'+';
}

echo $toString;

 
?>