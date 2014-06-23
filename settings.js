function setSettings(){
 	var ajaxRequest,
 	eu_name,
    eu_username,
    eu_address,
    eu_city,
	eu_contry,
	eu_postalCode,
	eu_cnp,
	eu_birthDate,
	eu_mobile,
	eu_phone,
	eu_email,
	eu_password,
	eu_confirmPassword,
	param;
	
	param='username='+getCookie('username');
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
               document.getElementById('u_error').innerHTML  = ajaxRequest.responseText;
              
               if(ajaxRequest.responseText=='')
               	{window.location.replace("settingsuser.php");
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
	
	
	ajaxRequest.open("POST", "servertime.php", true);
	ajaxRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    ajaxRequest.send(param)
}
	}


	function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
        var c = ca[i].trim();
        if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
    }
    return "";
}