<?php 

$host="fenrir.info.uaic.ro"; // Host name 
$db_username="NELO"; // Mysql username 
$db_password="sjOqapXt5L"; // Mysql password 
$db_name="NELO"; // Database name 
$tbl_name="user_login"; // users name 
$tblh_name="hotels";// hotels table
session_start();
$u_firstName_id = $_POST['u_firstName_id'];
$u_lastname_id = $_POST['u_lastname_id'];
$u_address_id = $_POST['u_address_id'];
$u_location_id = $_POST['u_location_id'];
$u_city_id = $_POST['u_city_id'];
$u_postalCode_id = $_POST['u_postalCode_id'];
$u_cnp_id = $_POST['u_cnp_id'];
$u_birthDate_id = $_POST['u_birthDate_id'];
$u_mobile_id = $_POST['u_mobile_id'];
$u_phone_id = $_POST['u_phone_id'];

$u_username_id =$_POST['u_username_id'];
$u_email_id =$_POST['u_email_id'];
$u_password_id =$_POST['u_password_id'];
$u_confirmPassword_id =$_POST['u_confirmPassword_id'];

// Connect to server and select databse.




$u_type=1;
$h_type=2;
//de aici


function getRandomID($dbhandle){
	$ok=0;
while($ok==0){
	
	$randomNum=rand(1000,9999);
	$query="SELECT ID_User FROM $tbl_name WHERE ID_User=$randomNum;";
	if(mysqli_query($dbhandle,$query)==true || mysqli_query($dbhandle,$query) == false){
		return $randomNum;
	}
    else{
	$result = mysqli_query($dbhandle,$query);
		$result = mysqli_fetch_array( $result);
		if( $result['ID_User']==NULL)
			{
			$ok=1;
			}
		}
}
    return $randomNum;
}



$u_firstName_id = stripslashes($u_firstName_id);
//$firstName = mysqli_real_escape_string($firstName);
$u_lastname_id = stripslashes($u_lastname_id);
//$address = mysql_real_escape_string($address);
$u_address_id = stripslashes($u_address_id);
//$city = mysql_real_escape_string($city);
$u_location_id = stripslashes($u_location_id);
//$cnp = mysql_real_escape_string($cnp);
$u_city_id = stripslashes($u_city_id);
//$mobile = mysql_real_escape_string($mobile);
$u_postalCode_id = stripslashes($u_postalCode_id);
//$email = mysql_real_escape_string($email);
$u_cnp_id = stripslashes($u_cnp_id);
//$lastName = mysql_real_escape_string($lastName);
$u_birthDate_id = stripslashes($u_birthDate_id);
//$country = mysql_real_escape_string($country);
$u_mobile_id = stripslashes($u_mobile_id);
//$postalCode = mysql_real_escape_string($postalCode);
$u_phone_id = stripslashes($u_phone_id);
//$dateOfBirth = mysql_real_escape_string($dateOfBirth);
$u_username_id = stripslashes($u_username_id);
//$phone = mysql_real_escape_string($phone);
$u_email_id = stripslashes($u_email_id);
//$username = mysql_real_escape_string($username);
$u_password_id = stripslashes($u_password_id);
//$password = mysql_real_escape_string($password);
$u_confirmPassword_id = stripslashes($u_confirmPassword_id);
//$confirmPassword = mysql_real_escape_string($confirmPassword);
    $dbhandle=mysqli_connect("$host", "$db_username", "$db_password")or die("cannot connect"); 
    $selected=mysqli_select_db($dbhandle,"$db_name")or die("cannot select DB");

// Connect to server and select databse.

//pana aici

function verifyUser($user,$type,$dbhandle) 
{ 
	if($type==1){
		
			$query="SELECT username FROM user_login WHERE username='$user';";
			

			$result = mysqli_query($dbhandle,$query);
			$result = mysqli_fetch_array($result);
			if ($result['username']==NULL) {
				$mesage='';
				return $mesage;
				}
			else{
				$mesage='ERROR!Username not valid!';
				return $mesage;
				}
				
		mysqli_free_result($result);
	}
	
	if($type=2){
		
			$query="SELECT h_username FROM hotels WHERE h_username='$user';";
			$result = mysqli_query($dbhandle,$query);

			$result = mysqli_fetch_array($result);
			if ($result['h_username']==NULL) {
				$mesage='';
				return $mesage;
				}
			else{
				$mesage='ERROR!Username not valid!';
				return $mesage;
				}
				
		mysqli_free_result($result);
	}
}; 

function verifyEmail($email,$type,$dbhandle){

	if($type==1){
		
			$query="SELECT email FROM user_login WHERE email='$email';";
			$result = mysqli_query($dbhandle,$query);
			$result = mysqli_fetch_array($result);
			if ($result['email']==NULL) {
				$mesage='';
				return $mesage;
				}
			else{
				$mesage='ERROR!E-Mail not valid!';
				return $mesage;
				}
				
		mysqli_free_result($result);
	}
	
	if($type=2){
		
			$query="SELECT h_email FROM hotels WHERE h_email='$email';";
			$result = mysqli_query($dbhandle,$query);

			$result = mysqli_fetch_array($result);
			if ($result['h_email']==NULL) {
				$mesage='';
				return $mesage;
				}
			else{
				$mesage='ERROR!E-Mail not valid!';
				return $mesage;
				}
				
		mysqli_free_result($result);

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
												$errors='Valid Data';
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
if(verifyUser($u_username_id,$u_type,$dbhandle)==""){
	$ok1=1;
   if(verifyEmail($u_email_id,$u_type,$dbhandle)==""){
   	   $ok2=1;
       if(verifyPassword($u_password_id,$u_confirmPassword_id)=="Valid Data"){
          $ok3=1;
           if($ok1==1 && $ok1==1 && $ok1==1 )
           {
           	$okAll=1;
           }
       }else{
           $export= verifyPassword($u_password_id,$u_confirmPassword_id);
       }
   }else{
  $export=verifyEmail($u_email_id,1,$dbhandle);
   }
}else{
$export=verifyUser($u_username_id,1,$dbhandle);
}
echo ($export);
 if($okAll==1)
 {  
 	$rn = getRandomID($dbhandle);
$insstm="INSERT INTO $tbl_name VALUES ('$rn','$u_username_id','$u_password_id',2,1,'$u_firstName_id','$u_lastname_id','$u_mobile_id','$u_phone_id','$u_email_id','$u_cnp_id','$u_birthDate_id','$u_city_id','$u_address_id','$u_postalCode_id',0);";
ob_end_clean();
$resu=mysqli_query($dbhandle,$insstm);
 	
 }

?>