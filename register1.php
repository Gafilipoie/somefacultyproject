<?php
$host="fenrir.info.uaic.ro"; // Host name 
$db_username="NELO"; // Mysql username 
$db_password="sjOqapXt5L"; // Mysql password 
$db_name="NELO"; // Database name 
$tbl_name="User_Login"; // users name  
$tblh_name="Hotels";// hotels table
function getRandomID(){
	$ok=0;
while($ok==0){
	
	$randomNum=rand(1000,9999);
	$query="SELECT ID_User FROM $tbl_name WHERE ID_User=$randomNum;";
	$result = mysql_query($query);
	
		if(mysql_fetch_array( $result)==NULL)
			{
			$ok=1;
			}
}
    return $randomNum;
}
session_start();

$firstName = $_POST['firstName'];
$address = $_POST['address'];
$city = $_POST['city'];
$cnp = $_POST['CNP'];
$mobile = $_POST['mobile'];
$username = $_POST['username'];
$email = $_POST['email'];
$lastName = $_POST['lastName'];
$country = $_POST['country'];
$postalCode = $_POST['postalCode'];
$dateOfBirth = $_POST['date'];
$phone = $_POST['phone'];
$password = $_POST['password'];

$firstName = stripslashes($firstName);
//$firstName = mysqli_real_escape_string($firstName);
$address = stripslashes($address);
//$address = mysql_real_escape_string($address);
$city = stripslashes($city);
//$city = mysql_real_escape_string($city);
$cnp = stripslashes($cnp);
//$cnp = mysql_real_escape_string($cnp);
$mobile = stripslashes($mobile);
//$mobile = mysql_real_escape_string($mobile);
$email = stripslashes($email);
//$email = mysql_real_escape_string($email);
$lastName = stripslashes($lastName);
//$lastName = mysql_real_escape_string($lastName);
$country = stripslashes($country);
//$country = mysql_real_escape_string($country);
$postalCode = stripslashes($postalCode);
//$postalCode = mysql_real_escape_string($postalCode);
$dateOfBirth = stripslashes($dateOfBirth);
//$dateOfBirth = mysql_real_escape_string($dateOfBirth);
$phone = stripslashes($phone);
//$phone = mysql_real_escape_string($phone);
$username = stripslashes($username);
//$username = mysql_real_escape_string($username);
$password = stripslashes($password);
//$password = mysql_real_escape_string($password);
$confirmPassword = stripslashes($confirmPassword);
//$confirmPassword = mysql_real_escape_string($confirmPassword);

echo  $_POST['firstName'];
echo  $_POST['address'];
echo  $_POST['city'];
echo  $_POST['CNP'];
echo  $_POST['mobile'];
echo  $_POST['username'];
echo  $_POST['email'];
echo  $_POST['lastName'];
echo  $_POST['country'];
echo  $_POST['postalCode'];
echo  $_POST['date'];
echo  $_POST['phone'];
echo  $_POST['password'];
echo  $password; 
// Connect to server and select databse.
mysql_connect("$host", "$db_username", "$db_password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
$rn = getRandomID();
echo $rn;	
$insstm="INSERT INTO $tbl_name VALUES ('$rn','$username', '$password',2,1,'$firstName','$lastName','$mobile','$phone','$email','$cnp','$dateOfBirth','$country','$city','$address','$postalCode',0);";
$resu=mysql_query($insstm);
echo $resu;
?>