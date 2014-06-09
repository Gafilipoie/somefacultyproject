<?php
$host="fenrir.info.uaic.ro"; // Host name 
$db_username="NELO"; // Mysql username 
$db_password="sjOqapXt5L"; // Mysql password 
$db_name="NELO"; // Database name 
$tbl_name="User_Login"; // users name  
$tblh_name="Hotels";// hotels table
session_start();
header("location:hotels.php");


$h_hotelName_id = $_POST['h_hotelName_id'];
$h_address_id = $_POST['h_address_id'];
$h_contry_id = $_POST['h_contry_id'];
$h_city_id = $_POST['h_city_id'];
$h_psotalCode_id = $_POST['h_psotalCode_id'];
$h_mobile_id = $_POST['h_mobile_id'];
$h_phone_id = $_POST['h_phone_id'];
$h_fax_id = $_POST['h_fax_id'];
$h_username_id = $_POST['h_username_id'];
$h_email_id = $_POST['h_email_id'];
$h_password_id = $_POST['h_password_id'];
$h_confirmPassword_id=$_POST['h_confirmPassword_id'];

// Connect to server and select databse.
mysql_connect("$host", "$db_username", "$db_password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

$u_type=1;
$h_type=2;
//de aici

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


$h_hotelName_id = stripslashes($h_hotelName_id);
$h_hotelName_id = mysql_real_escape_string($h_hotelName_id);

$h_address_id = stripslashes($h_address_id);
$h_address_id = mysql_real_escape_string($h_address_id);

$h_contry_id = stripslashes($h_contry_id);
$h_contry_id = mysql_real_escape_string($h_contry_id);

$h_city_id = stripslashes($h_city_id);
$h_city_id = mysql_real_escape_string($h_city_id);

$h_psotalCode_id = stripslashes($h_psotalCode_id);
$h_psotalCode_id = mysql_real_escape_string($h_psotalCode_id);

$h_mobile_id = stripslashes($h_mobile_id);
$h_mobile_id = mysql_real_escape_string($h_mobile_id);

$h_phone_id = stripslashes($h_phone_id);
$h_phone_id = mysql_real_escape_string($h_phone_id);

$h_fax_id = stripslashes($h_fax_id);
$h_fax_id = mysql_real_escape_string($h_fax_id);

$h_username_id = stripslashes($h_username_id);
$h_username_id = mysql_real_escape_string($h_username_id);


$h_email_id = stripslashes($h_email_id);
$h_email_id = mysql_real_escape_string($h_email_id);

$h_password_id = stripslashes($h_password_id);
$h_password_id = mysql_real_escape_string($h_password_id);

$h_confirmPassword_id = stripslashes($h_confirmPassword_id);
$h_confirmPassword_id = mysql_real_escape_string($h_confirmPassword_id);

// Connect to server and select databse.
function doInsert(){
$rn = getRandomID();
$insstm="INSERT INTO $tblh_name VALUES ('$rn','$h_username_id', '$h_password_id',h_type,'h_hotelName_id','$h_mobile_id','$h_phone_id','$h_fax_id','$h_email_id','$h_contry_id','$h_city_id','$h_address_id','h_psotalCode_id');";
$resu=mysql_query($insstm);
}

function verifyUser($user,$type) 
{ 
	if($type==1){
		
			$query="SELECT username FROM User_Login WHERE username='$user';";
			$result = mysql_query($query);

			$result = mysql_fetch_array($result);
			if ($result['username']==NULL) {
				$mesage='';
				return $mesage;
				}
			else{
				$mesage='ERROR!Username not valid!';
				return $mesage;
				}
				
		mysql_free_result($result);
	}
	
	if($type=2){
		
			$query="SELECT h_username FROM Hotels WHERE h_username='$user';";
			$result = mysql_query($query);

			$result = mysql_fetch_array($result);
			if ($result['h_username']==NULL) {
				$mesage='';
				return $mesage;
				}
			else{
				$mesage='ERROR!Username not valid!';
				return $mesage;
				}
				
		mysql_free_result($result);
	}
}; 

function verifyEmail($email,$type){

	if($type==1){
		
			$query="SELECT email FROM User_Login WHERE email='$email';";
			$result = mysql_query($query);
			$result = mysql_fetch_array($result);
			if ($result['email']==NULL) {
				$mesage='';
				return $mesage;
				}
			else{
				$mesage='ERROR!E-Mail not valid!';
				return $mesage;
				}
				
		mysql_free_result($result);
	}
	
	if($type=2){
		
			$query="SELECT h_email FROM Hotels WHERE h_email='$email';";
			$result = mysql_query($query);

			$result = mysql_fetch_array($result);
			if ($result['h_email']==NULL) {
				$mesage='';
				return $mesage;
				}
			else{
				$mesage='ERROR!E-Mail not valid!';
				return $mesage;
				}
				
		mysql_free_result($result);

	}

};

function verifyPassword($pwd1,$pwd2){
		if (strlen($pwd1) < 6) {
			$errors = 'Password too short!Must be at least 6 characters!';
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
												$errors='';
												return $errors;
											}
									}
							} 
					}
			
	
			}
};

$ok1=0;
$ok2=0;
$ok3=0;
$okAll=0;
if(verifyUser($h_username_id,$h_type)==""){
	$ok1=1;
   if(verifyEmail($h_email_id,$h_type)==""){
   	   $ok2=1;
       if(verifyPassword($h_password_id,$h_confirmPassword_id)==""){
          $ok3=1;
           if($ok1==1 && $ok1==1 && $ok1==1 )
           {
           	$okAll=1;
           }
       }else{
           $export= verifyPassword($h_password_id,$h_confirmPassword_id);
       }
   }else{
  $export=verifyEmail($h_email_id,1);
   }
}else{
$export=verifyUser($h_username_id,1);
}
echo ($export);
 if($okAll==1)
 {
 	$doInsert();
 	header("location:index.php");
 }

?>