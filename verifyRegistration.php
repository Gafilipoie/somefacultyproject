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

$u_user='jon20';
$u_email='mona@yahoo.com';
$u_type=1;

$h_user='mouse';
$h_email='vega@gmail.com';
$h_type=2;

verifyUser($h_user,$h_type);
varifyEmail($h_email,$h_type);


function verifyUser($user,$type) 
{ 
	if($type==1){
		
			$query=sprintf("SELECT username FROM user_login WHERE username='%s';",mysql_real_escape_string($user));
			$result = mysql_query($query);
			if ((mysql_fetch_array($result)['username'])==NULL) {
				$mesage='Wellcome!Register succesful!';
				return $mesage;
				}
			else{
				$mesage='ERROR!Username not valid!';
				return $mesage;
				}
				
		mysql_free_result($result);
	}
	
	if($type=2){
		
			$query=sprintf("SELECT h_username FROM hotels WHERE h_username='%s';",mysql_real_escape_string($user));
			$result = mysql_query($query);
			if ((mysql_fetch_array($result)['h_username'])==NULL) {
				$mesage='Wellcome!Register succesful!';
				echo $mesage;
				}
			else{
				$mesage='ERROR!Username not valid!';
				echo $mesage;
				}
				
		mysql_free_result($result);
	}
} 

function varifyEmail($email,$type){

	if($type==1){
		
			$query=sprintf("SELECT email FROM user_login WHERE email='%s';",mysql_real_escape_string($email));
			$result = mysql_query($query);
			if ((mysql_fetch_array($result)['email'])==NULL) {
				$mesage='Wellcome!Register succesful!';
				return $mesage;
				}
			else{
				$mesage='ERROR!E-Mail not valid!';
				return $mesage;
				}
				
		mysql_free_result($result);
	}
	
	if($type=2){
		
			$query=sprintf("SELECT h_email FROM hotels WHERE h_email='%s';",mysql_real_escape_string($email));
			$result = mysql_query($query);
			if ((mysql_fetch_array($result)['h_email'])==NULL) {
				$mesage='Wellcome!Register succesful!';
				return $mesage;
				}
			else{
				$mesage='ERROR!E-Mail not valid!';
				return $mesage;
				}
				
		mysql_free_result($result);

	}

}


?>