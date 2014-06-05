<?php 

$host="localhost"; // Host name 
$db_username="root"; // Mysql username 
$db_password=""; // Mysql password 
$db_name="hotel's"; // Database name 
$tbl_name="user_login"; // users name  
$tblh_name="Hotels";// hotels table
session_start();

// Connect to server and select databse.
mysql_connect("$host", "$db_username", "$db_password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");



$ok=0;
while($ok==0){
	
	$randomNum=rand(1000,9999);
	$query="SELECT ID_User FROM $tbl_name WHERE ID_User=$randomNum;";
	$result = mysql_query($query);
	
		if(mysql_fetch_array( $result)==NULL)
			{
			echo $randomNum;
			$ok=1;
			}
}
			
?>