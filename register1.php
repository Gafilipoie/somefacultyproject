<?php
header("location:register1.html");
$firstName = $_POST['firstName'];
$address = $_POST['address'];
$city = $_POST['city'];
$cnp = $_POST['CNP'];
$mobile = $_POST['mobile'];
$username = $_POST['username'];
$email = $_POST['email'];
$lastName = $_POST['lastName'];
$location = $_POST['location'];
$postalCode = $_POST['postalCode'];
$dateOfBirth = $_POST['date'];
$phone = $_POST['phone'];
$password = $_POST['password'];

echo '<div>'.$firstName.'</div>' $firstName;
print $address;
print $city;
print $cnp;
print $mobile;
print $username;
print $lastName;
print $location;
print $postalCode;
print $dateOfBirth;
print $phone;
print $password;
?>