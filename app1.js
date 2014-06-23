
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
	h_fax_id,
	 param;
	 
	 
	 h_hotelName_id = document.getElementById('h_hotelName_id').value;
	 h_address_id = document.getElementById('h_address_id').value;
	 h_contry_id = document.getElementById('h_contry_id').value;
	 h_city_id = document.getElementById('h_city_id').value;
	 h_postalCode_id = document.getElementById('h_postalCode_id').value;
	 h_phone_id = document.getElementById('h_phone_id').value;
	 h_fax_id = document.getElementById('h_fax_id').value;
	 h_username_id = document.getElementById('h_username_id').value;
	 h_email_id = document.getElementById('h_email_id').value;
	 h_password_id = document.getElementById('h_password_id').value;
	 h_confirmPassword_id = document.getElementById('h_confirmPassword_id').value;
	 
		
	 param=	'h_hotelName_id='+h_hotelName_id+'&'+
	 'h_address_id='+h_address_id+'&'+
	 'h_contry_id='+h_contry_id+'&'+
	 'h_city_id='+h_city_id+'&'+
	 'h_postalCode_id='+h_postalCode_id+'&'+
	 'h_phone_id='+h_phone_id+'&'+
	 'h_fax_id='+h_fax_id+'&'+
	 'h_username_id='+h_username_id+'&'+
	 'h_email_id='+h_email_id+'&'+
	 'h_password_id='+h_password_id+'&'+
	 'h_confirmPassword_id='+h_confirmPassword_id;
	 

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
			
			if(ajaxRequest.status == 200){
               document.getElementById('h_error').innerHTML  = ajaxRequest.responseText;
              
               if(ajaxRequest.responseText=='')
               	{  
                     //document.getElementById('left').style.visibility="hidden";
                     //document.getElementById('right').style.visibility="show";
                     //9window.location.href="";
                     $("#main_article").load('settingshotel.php');

           			}
           }
           else if(ajaxRequest.status == 400) {
              alert(ajaxRequest.responseText)
           }
           else {
               alert(ajaxRequest.status+ajaxRequest.responseText);
               window.location.replace("http://stackoverflow.com");
           }
		}
	}
	
	
	ajaxRequest.open("POST", "hotelregister.php", true);
	ajaxRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    ajaxRequest.send(param)
}