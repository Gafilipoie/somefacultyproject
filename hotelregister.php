<?php 

$host="fenrir.info.uaic.ro"; // Host name 
$db_username="NELO"; // Mysql username 
$db_password="sjOqapXt5L"; // Mysql password 
$db_name="NELO"; // Database name 
$tbl_name="user_login"; // users name 
$tblh_name="hotels";// hotels table
session_start();
	 $h_hotelName_id = $_POST['h_hotelName_id'];
	 $h_address_id = $_POST['h_address_id'];
	 $h_contry_id = $_POST['h_contry_id'];
	 $h_city_id = $_POST['h_city_id'];
	 $h_postalCode_id = $_POST['h_postalCode_id'];
	 $h_phone_id = $_POST['h_phone_id'];
	 $h_fax_id = $_POST['h_fax_id'];
	 $h_username_id = $_POST['h_username_id'];
	 $h_email_id = $_POST['h_email_id'];
	 $h_password_id = $_POST['h_password_id'];
	 $h_confirmPassword_id = $_POST['h_confirmPassword_id'];


// Connect to server and select databse.
	 


$u_type=1;
$h_type=2;
//de aici


function getRandomID($dbhandle){
	$ok=0;
while($ok==0){
	
	$randomNum=rand(1000,9999);
	$query="SELECT ID_Hotel FROM $tblh_name WHERE ID_Hotel=$randomNum;";
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



$h_hotelName_id = stripslashes($h_hotelName_id);
$h_address_id = stripslashes($h_address_id);
$h_contry_id = stripslashes($h_contry_id);
$h_city_id = stripslashes($h_city_id);
$h_postalCode_id = stripslashes($h_postalCode_id);
$h_phone_id = stripslashes($h_phone_id);
$h_hotelName_id = stripslashes($h_hotelName_id);
$h_fax_id = stripslashes($h_fax_id);
$h_username_id = stripslashes($h_username_id);
$h_email_id = stripslashes($h_email_id);
$h_password_id = stripslashes($h_password_id);
$h_confirmPassword_id = stripslashes($h_confirmPassword_id);

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
if(verifyUser($h_username_id,$h_type,$dbhandle)==""){
	$ok1=1;
   if(verifyEmail($h_email_id,$h_type,$dbhandle)==""){
   	   $ok2=1;
       if(verifyPassword($h_password_id,$h_confirmPassword_id)=="Valid Data"){
          $ok3=1;
           if($ok1==1 && $ok1==1 && $ok1==1 )
           {
           	$okAll=1;
           }
       }else{
           $export= verifyPassword($h_password_id,$h_confirmPassword_id);
       }
   }else{
  $export=verifyEmail($h_email_id,2,$dbhandle);
   }
}else{
$export=verifyUser($h_username_id,2,$dbhandle);
}
echo ($export);
 if($okAll==1)
 {  
 	$rn = getRandomID($dbhandle);

$insstm="INSERT INTO $tblh_name VALUES ('$rn','$h_username_id','$h_password_id',2,0,'$h_hotelName_id',NULL,0241488206,NUll,'$h_email_id','romanie','$h_city_id','$h_address_id',45687,'bavaric','bavaric','bavaric','bavaric','bavaric','bavaric','Aici descrierea hotelului','bavaria');";
ob_end_clean();
$resu=mysqli_query($dbhandle,$insstm);
 	
 }

?>