<?php 

$host="localhost"; // Host name 
$db_username="root"; // Mysql username 
$db_password=""; // Mysql password 
$db_name="hotel's"; // Database name 
$tbl_name="user_login"; // users name  
$tblh_name="hotels";// hotels table
session_start();

// Connect to server and select databse.
mysql_connect("$host", "$db_username", "$db_password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");



function getRandomID(){
$ok=0;
while($ok==0){
	
	$randomNum=rand(100000,999999);
	$query="SELECT ID_Hotel FROM $tblh_name WHERE ID_Hotel=$randomNum;";
	$result = mysql_query($query);
	
		if(mysql_fetch_array( $result)==NULL)
			{
			echo $randomNum;
			$ok=1;
			}
}
   return $randomNum;
}			
?>