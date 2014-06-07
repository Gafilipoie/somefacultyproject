function ajaxFunction(){
	var ajaxRequest;  // The variable that makes Ajax possible!
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
	 u_confirmPassword_id,
	 param;
	 
	 
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
		
	 param=	'u_firstName_id='+u_firstName_id+'&'+
	 'u_address_id='+u_address_id+'&'+
	 'u_city_id='+u_city_id+'&'+
	 'u_cnp_id='+u_cnp_id+'&'+
	 'u_mobile_id='+u_mobile_id+'&'+
	 'u_lastname_id='+u_lastname_id+'&'+
	 'u_location_id='+u_location_id+'&'+
	 'u_postalCode_id='+u_postalCode_id+'&'+
	 'u_birthDate_id='+u_birthDate_id+'&'+
	 'u_phone_id='+u_phone_id+'&'+
	 'u_username_id='+u_username_id+'&'+
	 'u_email_id='+u_email_id+'&'+
	 'u_password_id='+u_password_id+'&'+
	 'u_confirmPassword_id='+u_confirmPassword_id
	 ;
		try{
		// Opera 8.0+, Firefox, Safari
		ajaxRequest = new XMLHttpRequest();
	} catch (e){
		// Internet Explorer Browsers
		try{
			ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
		} catch (e) {
			try{
				ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
			} catch (e){
				// Something went wrong
				alert("Your browser broke!");
				return false;
			}
		}
	}
	// Create a function that will receive data sent from the server
	ajaxRequest.onreadystatechange = function(){
		if(ajaxRequest.readyState == 4){
			document.myForm.time.value = ajaxRequest.responseText;
		}
	}
	
	
	ajaxRequest.open("POST", "servertime.php", true);
	ajaxRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    ajaxRequest.send(param)
}

function ajaxFunction_h(){
	var ajaxRequest;  // The variable that makes Ajax possible!
	var h_username_id,
	h_email_id,
	h_password_id,
	h_confirmPassword_id,
	h_hotelName_id,
	h_contry_id,
	h_city_id,
	h_postalCode_id,
	h_address_id,
	h_mobile_id,
	h_phone_id,
	h_fax_id;
	 param;
	 
	 
 h_username_id = document.getElementById('h_username_id').value;
 h_email_id = document.getElementById('h_email_id').value;
 h_password_id = document.getElementById('h_password_id').value;
 h_confirmPassword_id = document.getElementById('h_confirmPassword_id').value;
 h_hotelName_id = document.getElementById('h_hotelName_id').value;
 h_contry_id = document.getElementById('h_contry_id').value;
 h_city_id = document.getElementById('h_city_id').value;
 h_postalCode_id = document.getElementById('h_postalCode_id').value;
 h_address_id = document.getElementById('h_address_id').value;
 h_mobile_id = document.getElementById('h_mobile_id').value;
 h_phone_id = document.getElementById('h_phone_id').value;
 h_fax_id = document.getElementById('h_fax_id').value;
		
	 param=	'h_username_id='+h_username_id+'&'+
	 'h_email_id='+h_email_id+'&'+
	 'h_password_id='+h_password_id+'&'+
	 'h_confirmPassword_id='+h_confirmPassword_id+'&'+
	 'h_hotelName_id='+h_hotelName_id+'&'+
	 'h_contry_id='+h_contry_id+'&'+
	 'h_city_id='+h_city_id+'&'+
	 'h_postalCode_id='+h_postalCode_id+'&'+
	 'h_address_id='+h_address_id+'&'+
	 'h_mobile_id='+h_mobile_id+'&'+
	 'h_phone_id='+h_phone_id+'&'+
	 'h_fax_id='+h_fax_id
	 ;
		try{
		// Opera 8.0+, Firefox, Safari
		ajaxRequest = new XMLHttpRequest();
	} catch (e){
		// Internet Explorer Browsers
		try{
			ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
		} catch (e) {
			try{
				ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
			} catch (e){
				// Something went wrong
				alert("Your browser broke!");
				return false;
			}
		}
	}
	// Create a function that will receive data sent from the server
	ajaxRequest.onreadystatechange = function(){
		if(ajaxRequest.readyState == 4){
			document.myForm.time.value = ajaxRequest.responseText;
		}
	}
	
	
	ajaxRequest.open("POST", "servertime.php", true);
	ajaxRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    ajaxRequest.send(param)
}