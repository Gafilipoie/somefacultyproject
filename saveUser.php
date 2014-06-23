<?php


$host="fenrir.info.uaic.ro"; // Host name 
$db_username="NELO"; // Mysql username 
$db_password="sjOqapXt5L"; // Mysql password 
$db_name="NELO"; // Database name 
$tbl_name="user_login"; // users name 
$tblh_name="hotels";// hotels table
// Connect to server and select databse.
$dbhandle=mysqli_connect("$host", "$db_username", "$db_password")or die("cannot connect"); 
    $selected=mysqli_select_db($dbhandle,"$db_name")or die("cannot select DB");

$eu_name=$_POST['eu_name'];
$eu_username=$_POST['eu_username'];
$eu_address=$_POST['eu_address'];
$eu_city=$_POST['eu_city'];
$eu_postalCode=$_POST['eu_postalCode'];
$eu_cnp=$_POST['eu_cnp'];
$eu_birthDate=$_POST['eu_birthDate'];
$eu_mobile=$_POST['eu_mobile'];
$eu_phone=$_POST['eu_phone'];
$eu_email=$_POST['eu_email'];
$eu_password=$_POST['eu_password'];
$oldUserName=$_POST['oldUserName'];

$eu_name = stripslashes($eu_name);
$eu_username = stripslashes($eu_username);
$eu_address = stripslashes($eu_address);
$eu_city = stripslashes($eu_city);
$eu_postalCode = stripslashes($eu_postalCode);
$eu_cnp = stripslashes($eu_cnp);
$eu_birthDate = stripslashes($eu_birthDate);
$eu_mobile = stripslashes($eu_mobile);
$eu_phone = stripslashes($eu_phone);
$eu_email = stripslashes($eu_email);
$eu_password = stripslashes($eu_password);
$oldUserName = stripslashes($oldUserName);

$sql="UPDATE $tbl_name SET username='$eu_username', 
FirstName = '$eu_name',
Address = '$eu_address',
City = '$eu_city',
Postal_Code = $eu_postalCode,
CNP = $eu_cnp,
Data = '$eu_birthDate',
Mobile = $eu_mobile,
Phone = $eu_phone,
email = '$eu_email',
password = $eu_password
WHERE username='$oldUserName';";
echo $sql;
$result=mysqli_query( $dbhandle,$sql)or die(mysql_error());
echo $result;	


?>