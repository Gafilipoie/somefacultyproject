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
		var response=ajaxRequest.responseText;
		if(ajaxRequest.readyState == 4){
			if(response=='Wrong Username or Password'){
			document.getElementById('login_error').innerHTML = response;
		     }else{
		     	if(response==1){
		     		setCookie('nelo',1,10);
		     		setCookie('username',username,10);
					hidestuff('left');
		     		showstuff('right');
		     		document.getElementById('userNameButton1').innerHTML=username;
		     		document.getElementById('userNameButton2').innerHTML=username;
		     		
		     	}
		     	if(response==2){
		     		setCookie('nelo',2,10);
		     		setCookie('username',username,10);
					hidestuff('left');
		     		showstuff('right');
		     		document.getElementById('userNameButton1').innerHTML=username;
		     		document.getElementById('userNameButton2').innerHTML=username;
		     	
		     	}
		     	if(response !=2 && response !=1 && response!=0 )
		     		{alert(ajaxRequest.responseText);}

		     }
		}
	}

	ajaxRequest.open("POST", "firstLogin.php", true);
	ajaxRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    ajaxRequest.send(param);
    


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



function remodel(){

if(getCookie('nelo')==1 || getCookie('nelo')==2)
 	{
	document.getElementById('left').style.visibility="hidden";
 	document.getElementById('userNameButton1').innerHTML=getCookie('username');
	document.getElementById('userNameButton2').innerHTML=getCookie('username');
 	showstuff('right');
 	}else{
 		
 	}


}
function logmeout(){

 
 	setCookie('nelo',0,10);
 	setCookie('username','',10);

	hidestuff('right');
 	showstuff('left');
    document.getElementById('password').value='';
 	
 	window.location = window.location.pathname;
 	

}

function gotoSettings(){
     var ajaxRequest; 
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
   ajaxRequest.onreadystatechange = function(){
        var response=ajaxRequest.responseText;
        if(ajaxRequest.readyState == 4){
          
           insertEditData(response);
        }
    }
   
    param='username='+getCookie('username')+'&'+
   'i='+getCookie('nelo');
    ajaxRequest.open("POST", "editData.php", true);
    ajaxRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    ajaxRequest.send(param);
     
}
function editablea(){
	$("input").prop("disabled", false);
}

function insertEditData(data){
    var user=['<article id="main">',
   '<div class="settings-heading">',
        '<div class="title">',
           ' Settings',
        '</div>',
    '</div>',
    '<div class="settings-main">',
        '<div  class="subtitle">Personal details</div>',
        '<div class="edit"><a id="editt"  class="edit">Edit</a></div>',
        '<hr>',
        '<div class="info">Name</div>',
        '<input id="eu_name" type="text"  autocomplete="off"  value=""  style="float: right;">',
        '<hr>',
       ' <div class="info">Username</div>',
       ' <input id="eu_username" type="text" autocomplete="off"  placeholder=""  style="float: right;">',
        '<hr>',
        '<div class="info">Adress</div>',
        '<input id="eu_address" type="text"  style="float: right;">',
        '<hr>',
        '<div class="info">City</div>',
        '<input id="eu_city" type="text"  style="float: right;">',
        '<hr>',
        '<div class="info">Postal Code</div>',
        '<input id="eu_postalCode" type="text"   style="float: right;">',
        '<hr>',
        '<div class="info">CNP</div>',
        '<input  id="eu_cnp" type="text"   style="float: right;">',
        '<hr>',
        '<div class="info">Birth Date</div>',
        '<input id="eu_birthDate" type="text"   style="float: right;">',
        '<hr>',
        '<div class="info">Mobile</div>',
        '<input id="eu_mobile" type="text"   style="float: right;">',
        '<hr>',
        '<div class="info">Phone</div>',
        '<input id="eu_phone" type="text"  style="float: right;">',
        '<hr>',
        '<div class="info">Email Adress</div>',
        '<input id="eu_email" type="text"  style="float: right;">',
        '<hr>',
        '<div class="info">New Password</div>',
        '<input id="eu_password" type="text"  style="float: right;">',
        '<hr>',
        '<div class="info">Confirm New Password</div>',
        '<input id="eu_confirmPassword" type="text"   style="float: right;">',
        '<hr>',
        '<div class="edit"><a href="#" onclick="saveEdit1()" class="edit">Save</a></div>',
    '</div>',
'</article>'].join('');
    var hotel= ['<article id="main">',
    '<div class="settings-heading">',
        '<div class="title">',
            'Settings',
        '</div>',
    '</div>',
    '<div class="settings-main">',
        '<div class="subtitle">Personal details</div>',
        '<div class="edit"><a href="#" class="edit">Edit</a></div>',
        '<hr>',
        '<div class="info">Hotel Name</div>',
        '<input type="text" id="sh_hotelName" name="username" style="float: right;" value="predifinedValue">',
        '<hr>',
        '<div class="info">Username</div>',
       '<input type="text" id="sh_username" name="username" style="float: right;" value="predifinedValue">',
        '<hr>',
        '<div class="info">Adress</div>',
        '<input type="text" id="sh_address" name="username" style="float: right;" value="predifinedValue">',
        '<hr>',
        '<div class="info">City</div>',
        '<input type="text"  id="sh_city"name="username" style="float: right;" value="predifinedValue">',
        '<hr>',
        '<div class="info">Postal Code</div>',
        '<input type="text"  id="sh_postalCode" name="username" style="float: right;" value="predifinedValue" >',
        '<hr>',
        '<div class="info">Mobile</div>',
        '<input type="text" id="sh_mobile" name="username" style="float: right;" value="predifinedValue">',
        '<hr>',
        '<div class="info">Phone</div>',
        '<input type="text" id="sh_phone" name="username" style="float: right;" value="predifinedValue">',
        '<hr>',
        '<div class="info">Fax</div>',
        '<input type="text" id="sh_fax" name="username" style="float: right;" value="predifinedValue">',
        '<hr>',
        '<div class="info">Email Adress</div>',
        '<input type="text"  id="sh_email" name="username" style="float: right;" value="predifinedValue">',
        '<hr>',
        '<div class="info">Numar Camere</div>',
        '<input type="number"  id="sh_nrCamere" name="username" style="float: right;" value="predifinedValue">',
        '<hr>',
        '<div class="info">Overbooking</div>',
        '<input type="radio"  id="yes" name="over" style="float: right;" >Yes<br>',
        '<input type="radio"  id="no" name="over" checked="true" style="float: right;" >No',
        '<hr>',
        '<div class="info">Password</div>',
        '<input type="text"  id="sh_password" name="username" style="float: right;" value="">',
        '<hr>',
        '<div class="info">Confirm Password</div>',
        '<input type="text"  id="sh_confirmPassword" name="username" style="float: right;" value="">',
        '<hr>',
        '<div class="info">Facilities</div>',
        '<form name="facilities"  action="" method="" class="form">',
            '<div class="edit_checkbox">',
               '<input type="checkbox" name="piscina"> Piscina',
                '<input type="checkbox" name="Parcare" style="margin-left: 38px;"> Parcare',
                '<input type="checkbox" name="lift" style="margin-left: 30px;"> Lift',
                '<input type="checkbox" name="restaurant" style="margin-left: 63px;"> Restaurant<br>',
                '<input type="checkbox" name="plaja_privata"> Plaja Privata',
                '<input type="checkbox" name="spa"> Spa',
                '<input type="checkbox" name="sala_fitness" style="margin-left: 55px;"> Sala Fitness',
                '<input type="checkbox" name="sala_forta"> Sala Forta<br>',
                '<input type="checkbox" name="jacuzzi"> Jacuzzi',
                '<input type="checkbox" name="internet" style="margin-left: 39px;"> Internet',
                '<input type="checkbox" name="bar" style="margin-left: 32px;"> Bar',
                '<input type="checkbox" name="sauna" style="margin-left: 60px;"> Sauna<br>',
                '<input type="checkbox" name="foisor"> Foisor',
                '<input type="checkbox" name="teren_sport" style="margin-left: 43px;"> Teren Sport',
                '<input type="checkbox" name="terasa"> Terasa',
                '<input type="checkbox" name="gratar" style="margin-left: 37px;"> Gratar',
            '</div>',
        '</form>',
        '<hr>',
         '<form action="" method="post" enctype="multipart/form-data">',
            '<div id="images">',
            '<label for="file">Filename:</label>',
            '<input type="file" name="file" id="file"><br>',
            '</div>',
            '<input type="button" onclick="addImg()" name="submit" value="Add more images" style="float: right;">',
        '</form>',    
        '<hr>',
        '<div class="edit"><a href="#" onclick="saveEdit2()"  class="edit">Save</a></div>',
    '</div>',
'</article>'].join('');
    var words= data.split('|');
    console.log(words);
    if(getCookie('nelo')==1){
          put=document.getElementById('main_article');
          put.innerHTML=user;

          document.getElementById('eu_name').value=words[0];
          document.getElementById('eu_username').value=words[1];
          document.getElementById('eu_address').value=words[2];
          document.getElementById('eu_city').value=words[3];
          document.getElementById('eu_postalCode').value=words[4];
          document.getElementById('eu_cnp').value=words[5];
          document.getElementById('eu_birthDate').value=words[6];
          document.getElementById('eu_mobile').value=words[7];
          document.getElementById('eu_phone').value=words[8];
          document.getElementById('eu_email').value=words[9];
          

          


    }
    if(getCookie('nelo')==2){
          put=document.getElementById('main_article');
          put.innerHTML=hotel;
          document.getElementById('sh_hotelName').value=words[0];
          document.getElementById('sh_username').value=words[1];
          document.getElementById('sh_address').value=words[2];
          document.getElementById('sh_city').value=words[3];
          document.getElementById('sh_postalCode').value=words[4];
          document.getElementById('sh_mobile').value=words[5];
          document.getElementById('sh_phone').value=words[6];
          document.getElementById('sh_fax').value=words[7];
          document.getElementById('sh_email').value=words[8];
          document.getElementById('sh_nrCamere').value=words[9];
    }

}
function saveEdit2(){

  var sh_hotelName=document.getElementById('sh_hotelName').value,
  sh_username= document.getElementById('sh_username').value,
  sh_address=document.getElementById('sh_address').value,
  sh_city=document.getElementById('sh_city').value,
  sh_postalCode=document.getElementById('sh_postalCode').value,
  sh_mobile=document.getElementById('sh_mobile').value,
  sh_phone=document.getElementById('sh_phone').value,
  sh_fax=document.getElementById('sh_fax').value,
  sh_email=  document.getElementById('sh_email').value,
  sh_password=document.getElementById('sh_password').value,
  sh_confirmPassword=document.getElementById('sh_password').value;
  




   if(!(sh_phone=='' || sh_hotelName=='' || sh_username=='' || sh_address=='' || sh_city=='' || sh_postalCode=='' || sh_mobile=='' || sh_fax=='' || sh_email=='' || sh_password=='')){
   if(sh_confirmPassword==sh_password){
   
   var ajaxRequest; 
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
   ajaxRequest.onreadystatechange = function(){
        var response=ajaxRequest.responseText;
        if(ajaxRequest.readyState == 4){
          if(ajaxRequest.status==200 && ajaxRequest.responseText ==''){
          alert('Saved');
          }
        }

    }
    var oldUserName=getCookie('username');
    var param=  'sh_hotelName='+sh_hotelName+'&'+
   'sh_username='+sh_username+'&'+
   'sh_address='+sh_address+'&'+
   'sh_city='+sh_city+'&'+
   'sh_postalCode='+sh_postalCode+'&'+
   'sh_mobile='+sh_mobile+'&'+
   'sh_phone='+sh_phone+'&'+
   'sh_fax='+sh_fax+'&'+
   'sh_email='+sh_email+'&'+
   'sh_password='+sh_password+'&'+
   'oldUserName='+oldUserName;
   
    
    ajaxRequest.open("POST", "saveHotel.php", true);
    ajaxRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    ajaxRequest.send(param);
     

   
    }else{alert('password must match')
  }
}else{
  alert('Empty');
}

}


function saveEdit1(){

      var eu_name = document.getElementById('eu_name').value,
         eu_username =document.getElementById('eu_username').value,
         eu_address =document.getElementById('eu_address').value,
         eu_city =document.getElementById('eu_city').value,
         eu_postalCode =document.getElementById('eu_postalCode').value,
         eu_cnp =document.getElementById('eu_cnp').value,
         eu_birthDate =document.getElementById('eu_birthDate').value,
         eu_mobile =document.getElementById('eu_mobile').value,
         eu_phone =document.getElementById('eu_phone').value,
          eu_email=document.getElementById('eu_email').value,
          eu_password=document.getElementById('eu_password').value;
          eu_confirmPassword=document.getElementById('eu_confirmPassword').value;

if(!(eu_name=='' || eu_username=='' || eu_address=='' || eu_city=='' || eu_postalCode=='' || eu_cnp=='' || eu_birthDate=='' || eu_phone=='' || eu_mobile=='' || eu_email=='' || eu_password=='')){
if(eu_password==eu_confirmPassword){

  var ajaxRequest; 
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
   ajaxRequest.onreadystatechange = function(){
        var response=ajaxRequest.responseText;
        if(ajaxRequest.readyState == 4){
          console.log(response);
          if(ajaxRequest.status==200 && ajaxRequest.responseText ==''){
         alert('Saved');
          }
        }

    }

var oldUserName=getCookie('username');
 var param='eu_name='+eu_name+'&'+
          'eu_username='+eu_username+'&'+
          'eu_address='+eu_address+'&'+
          'eu_city='+eu_city+'&'+
          'eu_postalCode='+eu_postalCode+'&'+
          'eu_cnp='+eu_cnp+'&'+
          'eu_birthDate='+eu_birthDate+'&'+
          'eu_mobile='+eu_mobile+'&'+
          'eu_phone='+eu_phone+'&'+
          'eu_email='+eu_email+'&'+
          'eu_password='+eu_password+'&'+
           'oldUserName='+oldUserName;

    ajaxRequest.open("POST", "saveUser.php", true);
    ajaxRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    ajaxRequest.send(param);
         
        }else{
          alert('password mist');
        }
}else{
  alert('Empty Fields');
}
}


function addImg(){

     var html=['<label for="file">Filename:</label>',
            '<input type="file" name="file" id="file"><br>',].join('');
     var put=document.getElementById('images');
     put.innerHTML=put.innerHTML+html;

}



function myFunction(){

alert("Salut");

}