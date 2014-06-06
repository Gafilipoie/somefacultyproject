

function validate(){
 var u_firstName_id,
 u_address_id,
 u_city_id,
 u_cnp_id,
 u_mobile_id,
 u_lastname_id,
 u_location_id,
 u_postalCode_id,
 u_birthDate_id,
 u_phone_id,
 u_username_id,
 u_email_id,
 u_password_id,
 u_confirmPassword_id;
 
 u_firstName_id = document.getElementById('u_firstName_id').value;
 u_address_id = document.getElementById('u_address_id').value;
 u_city_id = document.getElementById('u_city_id').value;
 u_cnp_id = document.getElementById('u_cnp_id').value;
 u_mobile_id = document.getElementById('u_mobile_id').value;
 u_lastname_id = document.getElementById('u_lastname_id').value;
 u_location_id = document.getElementById('u_location_id').value;
 u_postalCode_id = document.getElementById('u_postalCode_id').value;
 u_birthDate_id = document.getElementById('u_birthDate_id').value;
 u_phone_id = document.getElementById('u_phone_id').value;
 u_username_id = document.getElementById('u_username_id').value;
 u_email_id = document.getElementById('u_email_id').value;
 u_password_id = document.getElementById('u_password_id').value;
 u_confirmPassword_id = document.getElementById('u_confirmPassword_id').value;

 x= u_firstName_id+' '+
 u_address_id+' '+
 u_city_id+' '+
 u_cnp_id+' '+
 u_mobile_id+' '+
 u_lastname_id+' '+
 u_location_id+' '+
 u_postalCode_id+' '+
 u_birthDate_id+' '+
 u_phone_id+' '+
 u_username_id+' '+
 u_email_id+' '+
 u_password_id+' '+
 u_confirmPassword_id; 
 console.log(x);
 };
	