
function register(){
	var ajaxRequest;  // The variable that makes Ajax possible!
	var r_firstName,
	r_lastname,
	r_address,
	r_mobile,
	r_phone,
	r_adulti,
	r_copii,
	r_camere,
	r_start,
	r_end,
	r_night;
	 
	 
	 r_firstName = document.getElementById('r_firstName').value;
	 r_lastname = document.getElementById('r_lastname').value;
	 r_address = document.getElementById('r_address').value;
	 r_mobile = document.getElementById('r_mobile').value;
	 r_phone = document.getElementById('r_phone').value;
	 r_adulti = document.getElementById('r_adulti').value;
	 r_copii = document.getElementById('r_copii').value;
	 r_camere = document.getElementById('r_camere').value;
	 r_start = document.getElementById('r_start').value;
	 r_end = document.getElementById('r_end').value;
	 r_night = document.getElementById('r_night').value;
	 
		
	 param=	'r_firstName='+r_firstName+'&'+
	 'r_lastname='+r_lastname+'&'+
	 'r_address='+r_address+'&'+
	 'r_mobile='+r_mobile+'&'+
	 'r_phone='+r_phone+'&'+
	 'r_adulti='+r_adulti+'&'+
	 'r_copii='+r_copii+'&'+
	 'r_camere='+r_camere+'&'+
	 'r_start='+r_start+'&'+
	 'r_end='+r_end+'&'+
	 'r_night='+r_night;
	 

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
              
              alert(ajaxRequest.responseText)
              
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
	
	
	ajaxRequest.open("POST", "register.php", true);
	ajaxRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    ajaxRequest.send(param)
}