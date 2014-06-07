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


$first_password='Mal3one';
$second_password='Mal3one';
$getmesaje=verifyPassword($first_password,$second_password);

echo $getmesaje;



function verifyPassword($pwd1,$pwd2){
		if (strlen($pwd1) < 6) {
			$errors = 'Password too short!Must be at least 6 characters minimum!';
			return $errors;
		}else{
				if (!preg_match("#[0-9]+#", $pwd1)) {
					$errors = 'Password must include at least one number!';
					return $errors;
				}else{
						if (!preg_match("#[A-Z]+#", $pwd1)) {
							$errors= 'Password must include at least one Upper letter!';
							return $errors;
						}else{
								if (!preg_match("#[a-z]+#", $pwd1)) {
									$errors= 'Password must include at least one Lower letter!';
									return $errors;
								}else{
										if($pwd1!=$pwd2){
											$errors= 'Password must Match!';
											return $errors;
										}else{
												$errors='Password okey!';
												return $errors;
											}
									}
							} 
					}
			
	
			}
}

?>