<?php
$username=$_POST['username']; 
$password=$_POST['password']; 
$host="fenrir.info.uaic.ro"; // Host name 
$db_username="NELO"; // Mysql username 
$db_password="sjOqapXt5L"; // Mysql password 
$db_name="NELO"; // Database name 
$tbl_name="user_login"; // users name 
$tblh_name="hotels";// hotels table
// Connect to server and select databse.
mysql_connect("$host", "$db_username", "$db_password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form 
$username=$_POST['username']; 
$password=$_POST['password']; 
session_start();
// To protect MySQL injection (more detail about MySQL injection)
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
$sql="SELECT * FROM $tbl_name WHERE username='$username' and password='$password'";
$result=mysql_query($sql);

$sqlh="SELECT * FROM $tblh_name WHERE h_username='$username' and h_password='$password'";

$resulth=mysql_query($sqlh);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
$counth=mysql_num_rows($resulth);
// If result matched $myusername and $mypassword, table row must be 1 row
if($count == 1 || $counth == 1){
if($count == 1){
echo 1;

// Register $myusername, $mypassword and redirect to file ".php"
$_SESSION['username'] = $username;
$_SESSION['password'] = $password; 

//header("location:hotels.php");
}
if($counth == 1){
echo 2;

// Register $myusername, $mypassword and redirect to file "login_success.php"
$_SESSION['username'] = $username;
$_SESSION['password'] = $password; 


}}
else {
echo "Wrong Username or Password";
}
?>
