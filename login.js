function userLogin(){
  var ajaxRequest; 
  var username,
  	 password,
  	 param; 

	 username = document.getElementById('username').value;
	 password = document.getElementById('password').value;
	 
	param=	'username='+username+'&'+
	 'password='+password;

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
			document.getElementById('login_error').innerHTML = ajaxRequest.responseText;
		}
	}

	ajaxRequest.open("POST", "firstLogin.php", true);
	ajaxRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    ajaxRequest.send(param)
}