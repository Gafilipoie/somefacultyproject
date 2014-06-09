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
			if(ajaxRequest.responseText=='Wrong Username or Password'){
			document.getElementById('login_error').innerHTML = ajaxRequest.responseText;
		     }else{
		     	setCookie('nelo',1,10);
		     	console.log(getCookie('nelo'));
				hidestuff('leftPanel');
		     	showstuff('rightPanel');
		     }
		}
	}

	ajaxRequest.open("POST", "firstLogin.php", true);
	ajaxRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    ajaxRequest.send(param)
}


function showstuff(boxid){
   document.getElementById(boxid).style.visibility="visible";
}
 
function hidestuff(boxid){
    document.getElementById(boxid).style.visibility="hidden";
}

function setCookie(cname, cvalue, exhours) {
    var d = new Date();
    d.setTime(d.getTime() + (exhours*60*60*1000));
    var expires = "expires="+d.toGMTString();
    document.cookie = cname + "=" + cvalue + "; " + expires;
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

function checkCookie() {
    var user = getCookie("username");
    if (user != "") {
        alert("Welcome again " + user);
    } else {
        user = prompt("Please enter your name:", "");
        if (user != "" && user != null) {
            setCookie("username", user, 365);
        }
    }
}

function remodel(){

if(getCookie('nelo')==1)
 	{
	hidestuff('leftPanel');
 	showstuff('rightPanel');
 	alert('cokie setat');
 	}else{
 	alert('cokie nesetat');
 	}

}