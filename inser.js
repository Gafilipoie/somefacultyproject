hotelid= null;
count=0;
ok=0;
var hotelNames=['cici','zici','mici'],
    hotelImages=['bavaria','download','images'],
    today = new Date();
    var dd = today.getDate();
var mm = today.getMonth()+1; //January is 0!
var yyyy = today.getFullYear();

if(dd<10) {
    dd='0'+dd
} 

if(mm<10) {
    mm='0'+mm
} 

today = mm+'/'+dd+'/'+yyyy;


function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
        var c = ca[i].trim();
        if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
    }
    return "";
}

function insert() {
 
  $("#footer").load("footer.php");
  var put = document.getElementById('main');
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
        
        if(ajaxRequest.readyState == 4 && ajaxRequest.status == 200){
            
             yy(response,'main');
            

        }
        
    }
    
    ajaxRequest.open("POST", "hoteldata.php", true);
    ajaxRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    ajaxRequest.send();
    
    
}
function yy(sirParcurs,vvvv){
  console.log(sirParcurs);
    
  var words = sirParcurs.split('+'),
      htmlToInsert,
      put=document.getElementById(vvvv);
      put.innerHTML='';
      console.log(words);
  for(i=0;i<words[0][0];i++){

    words[i]=words[i].split('|');
    
    if(i==0){
      words[i][3]= hotelType(words[i][3]);
    htmlToInsert =[ 
            '<div class="hotel-block">',
                '<div class="block-body">', 
                    '<a onclick="gotoDetails(',words[i][6],')">',
                        '<div class="imgWrap">',
                            '<img src="resources/imagini/',words[i][5],'.jpg" class="block-picture">',
                           ' <p class="imgDescription">---------- Details ----------</p>',
                       ' </div>',
                    '</a>',
               '</div>',
                '<div class="block-footer">',
                   '<div class="hotel-detail">',
                        '<div class="hotel-name" style="text-overflow: ellipsis">',words[i][1],'</div>',
                        '<div class="hotel-location"><img src="resources/imagini/location-icon.png" style="width:15px; height: 15px; margin-top: 1px; margin-right: 3px ">',words[i][2],'</div>',
                       ' <div class="hotel-type"><img src=""><img src="resources/imagini/type-icon.png" style="width:15px; height: 15px; margin-top: 1px; margin-right: 3px">',words[i][3],'</div>',
                    '</div>',
                    '<div class="rezervation">',
                        '<a href="#modalReservation" id="',words[i][6],'" onclick="lkHandler(this)">Book Now!</a>',
                        '<div id="modalReservation" class="modalReservation">',
                            '<div>',
                                '<a href="#closeReservation" title="Close" class="closeReservation">X</a>',
                                '<div class="loginTitle">', // Da copii de aici
                                  'Booking',
                                '</div>',
                                '<div class="loginForm">', 
                                  '<form name="book" action="" method="post">', 
                                    '<div id="registerForm" class="form1">',
                                      '<h3 style="color: #003580;">* Personal Information</h3>',
                                      'First Name: <input type="text"  id="r_firstName" maxlength="40" autocomplete="off" name="firstName" style="float: right;"><hr>',
                                      'Last Name: <input type="text"  id="r_lastname" maxlength="40" autocomplete="off" name="lastName" style="float: right;"><hr>',
                                      'Adress: <input type="text" id="r_address" maxlength="" autocomplete="off" name="address" style="float: right;"><hr>',
                                      'Mobile: <input type="text" id="r_mobile" maxlength="40" autocomplete="off" name="mobile" style="float: right;"><hr>',
                                      'Email: <input type="email" id="r_email" maxlength="40" autocomplete="off" name="email" style="float: right;"><hr>',
                                      '<h3 style="color: #003580;">* Requested Space</h3>',
                                      'Nr. Adults: <input type="number" id="r_adulti" maxlength="40" autocomplete="off" name="phone" style="margin-left: 4px; margin-right: 120px;">',
                                      'Nr. Children: <input type="number" id="r_copii" maxlength="40" autocomplete="off" name="phone" style=""><hr>',
                                      'Nr. Rooms: <input type="number" id="r_camere" maxlength="40" autocomplete="off" name="phone" style="margin-right: 120px;">',
                                      'Nr. Nights: <input type="number" id="r_night" maxlength="40" autocomplete="off" name="phone" style="margin-left: 15px;"><hr>',
                                      'Start Date: <input type="date" id="r_start" maxlength="40" autocomplete="off" name="phone" style="margin-left: 6px; margin-right: 120px;">',
                                      'End Date : <input type="date" id="r_end" maxlength="40" autocomplete="off" name="phone" style="margin-left: 19px;"><hr>',

                                      '<input type="button"  onclick="register()" value="Rezerv" class="login-button" style="float: right;"> ',
                                      '<div id="r_error"></div>',
                                    '</div>',
                                  '</form>',
                                '</div>', // pana aici 
                            '</div>',
                        '</div>',
                    '</div>',
                   ' <div class="hotel-description">',
                       ' <p>',words[i][4],'</p>',
                    '</div>',
               ' </div>',
           '</div>'
].join('');
    
    }else{
       words[i][2]= hotelType(words[i][2]);
htmlToInsert =[ 
            '<div class="hotel-block">',
                '<div class="block-body">',
                    '<a onclick="gotoDetails(',words[i][5],')">',
                        '<div class="imgWrap">',
                            '<img src="resources/imagini/',words[i][4],'.jpg" class="block-picture">',
                           ' <p class="imgDescription">---------- Details ----------</p>',
                       ' </div>',
                    '</a>',
               '</div>',
                '<div class="block-footer">',
                   '<div class="hotel-detail">',
                        '<div class="hotel-name">',words[i][0],'</div>',
                        '<div class="hotel-location"><img src="resources/imagini/location-icon.png" style="width:15px; height: 15px; margin-top: 1px; margin-right: 3px">',words[i][1],'</div>',
                       ' <div class="hotel-type"><img src=""><img src="resources/imagini/type-icon.png" style="width:15px; height: 15px; margin-top: 1px; margin-right: 3px">',words[i][2],'</div>',
                    '</div>',
                    '<div class="rezervation">',
                        '<a href="#modalReservation" id="',words[i][5],'" onclick="lkHandler(this)" >Book Now!</a>',
                       '<div id="modalReservation" class="modalReservation">',
                            '<div>',
                                '<a href="#closeReservation" title="Close" class="closeReservation">X</a>',
                                '<div class="loginTitle">', // Da copii de aici
                                  'Booking',
                                '</div>',
                                '<div class="loginForm">', 
                                  '<form name="book" action="" method="post">', 
                                    '<div id="registerForm" class="form1">',
                                      '<h3 style="color: #003580;">* Personal Information</h3>',
                                      'First Name: <input type="text"  id="r_firstName" maxlength="40" autocomplete="off" name="firstName" style="float: right;"><hr>',
                                      'Last Name: <input type="text"  id="r_lastname" maxlength="40" autocomplete="off" name="lastName" style="float: right;"><hr>',
                                      'Adress: <input type="text" id="r_address" maxlength="" autocomplete="off" name="address" style="float: right;"><hr>',
                                      'Mobile: <input type="text" id="r_mobile" maxlength="40" autocomplete="off" name="mobile" style="float: right;"><hr>',
                                      'Email: <input type="email" id="r_email" maxlength="40" autocomplete="off" name="email" style="float: right;"><hr>',
                                      '<h3 style="color: #003580;">* Requested Space</h3>',
                                      'Nr. Adults: <input type="number" id="r_adulti" maxlength="40" autocomplete="off" name="phone" style="margin-left: 4px; margin-right: 120px;">',
                                      'Nr. Children: <input type="number" id="r_copii" maxlength="40" autocomplete="off" name="phone" style=""><hr>',
                                      'Nr. Rooms: <input type="number" id="r_camere" maxlength="40" autocomplete="off" name="phone" style="margin-right: 120px;">',
                                      'Nr. Nights: <input type="number" id="r_night" maxlength="40" autocomplete="off" name="phone" style="margin-left: 15px;"><hr>',
                                      'Start Date: <input type="date" id="r_start" maxlength="40" autocomplete="off" name="phone" style="margin-left: 6px; margin-right: 120px;">',
                                      'End Date : <input type="date" id="r_end" maxlength="40" autocomplete="off" name="phone" style="margin-left: 19px;"><hr>',

                                      '<input type="button"  onclick="register()" value="Rezerv" class="login-button" style="float: right;"> ',
                                      '<div id="r_error"></div>',
                                    '</div>',
                                  '</form>',
                                '</div>', // pana aici 
                            '</div>',
                        '</div>',
                    '</div>',
                   ' <div class="hotel-description">',
                       ' <p>',words[i][3],'</p>',
                    '</div>', 
               ' </div>',
           '</div>'
].join('');    

}
   
  put.innerHTML=put.innerHTML+ htmlToInsert;
  
  }
 
     
    
}



function manageHotelOutput(sirParcurs){


}
function hotelType(x){

    if(x==0)
      { return 'Cort';}
    if(x==1)
      { return 'Cabanuta';}
    if(x==2)
      { return 'Cabana';}
    if(x==3)
      { return 'hotel';}
    if(x==4)
      { return 'Complex';}

}


function register(){
  var ajaxRequest,
  cookee;  // The variable that makes Ajax possible!
  var r_firstName,
  r_lastname,
  r_address,
  r_mobile,
  r_email,
  r_adulti,
  r_copii,
  r_camere,
  r_start,
  r_end,
  r_night;
   
  
   cookee= getCookie('nelo');
   r_firstName = document.getElementById('r_firstName').value;
   r_lastname = document.getElementById('r_lastname').value;
   r_address = document.getElementById('r_address').value;
   r_mobile = document.getElementById('r_mobile').value;
   r_email = document.getElementById('r_email').value;
   r_adulti = document.getElementById('r_adulti').value;
   r_copii = document.getElementById('r_copii').value;
   r_camere = document.getElementById('r_camere').value;
   r_start = document.getElementById('r_start').value;
   r_end = document.getElementById('r_end').value;
   r_night = document.getElementById('r_night').value;
   
    
   param= 'logged='+cookee+'&'+
   'r_firstName='+r_firstName+'&'+
   'r_lastname='+r_lastname+'&'+
   'r_address='+r_address+'&'+
   'r_mobile='+r_mobile+'&'+
   'r_email='+r_email+'&'+
   'r_adulti='+r_adulti+'&'+
   'r_copii='+r_copii+'&'+
   'r_camere='+r_camere+'&'+
   'r_start='+r_start+'&'+
   'r_end='+r_end+'&'+
   'hotelid='+hotelid+'&'+
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
              if(ajaxRequest.responseText==""){
              
               alert('Cererea Dumneavoastra a fost procesata. Asteptati un mail de confirmare. Multumim!');
               window.location.href='';
              }else{
                alert(ajaxRequest.responseText);
             
                document.getElementById('r_adulti').value="";
                document.getElementById('r_copii').value="";
                document.getElementById('r_night').value="";
                document.getElementById('r_camere').value="";
                var x = ajaxRequest.responseText.split(' ');
                if(x[0]!='Campuri')
                  {window.location.href='';}
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
  
  
  ajaxRequest.open("POST", "register.php", true);
  ajaxRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    ajaxRequest.send(param)
};


function lkHandler(el){
  var words;
    param= 'username='+getCookie('username');
   hotelid = el.id;
   if(getCookie('nelo')==1 ||  getCookie('nelo')==2 )
    {
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

                   
             words = ajaxRequest.responseText.split('|')
              document.getElementById('r_firstName').value=words[0];
              document.getElementById('r_lastname').value=words[1];
              document.getElementById('r_address').value=words[2];
              document.getElementById('r_mobile').value=words[3];
              document.getElementById('r_email').value=words[4];
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
  
  
  ajaxRequest.open("POST", "getEditData.php", true);
  ajaxRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  ajaxRequest.send(param);

    }else{
     
    }
 
}

function gotoDetails(el){

  
 param="hotel="+el;
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
             manageDetails(ajaxRequest.responseText);
           }
           else if(ajaxRequest.status == 400) {
              
           }
           else {
               alert(ajaxRequest.status+ajaxRequest.responseText);
               window.location.replace("http://stackoverflow.com");
           }
    }
  }
  
  
  ajaxRequest.open("POST", "details.php", true);
  ajaxRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  ajaxRequest.send(param)
  
  //$('#main_article').load('hotels.php');
}



function manageDetails(sir){

var words = sir.split('|'),

  htmlToInsert=[
   
    '<article id="main">',
        '<article class="background">',
            '<div class="heading">',
                '<div class="details-title">',words[0],'</div>',
                '<hr>',
            '</div>',
           ' <div class="container">',
                '<div class="gallery">',
                    '<div class="thumbnails">',
                       ' <img onmouseover="preview.src=img1.src" name="img1" src="resources/imagini/gallery/',words[4],'.jpg" alt="" />',
                        '<img onmouseover="preview.src=img2.src" name="img2" src="resources/imagini/gallery/',words[6],'.jpg" alt="" />',
                       ' <img onmouseover="preview.src=img3.src" name="img3" src="resources/imagini/gallery/',words[7],'.jpg" alt="" />',
                       ' <img onmouseover="preview.src=img4.src" name="img4" src="resources/imagini/gallery/',words[8],'.jpg" alt="" />',
                       ' <img onmouseover="preview.src=img5.src" name="img5" src="resources/imagini/gallery/',words[9],'.jpg" alt="" />',
                        '<img onmouseover="preview.src=img6.src" name="img6" src="resources/imagini/gallery/',words[10],'.jpg" alt="" />',
                   ' </div>',
                   ' <div class="preview" align="center">',
                      '  <img name="preview" src="resources/imagini/gallery/',words[12],'.jpg" alt=""/>',
                    '</div>',
                '</div>',
               ' <div class="description">',
                   ' <div class="description_h">',
                       ' <div class="d_title">Description</div>',
                        '<div class="rezervation">',
                        '<a href="#modalReservation" id="',words[i][5],'" onclick="lkHandler(this)" >Book Now!</a>',
                        '<div id="modalReservation" class="modalReservation">',
                            '<div>',
                                '<a href="#closeReservation" title="Close" class="closeReservation">X</a>',
                                '<div class="loginTitle">', // Da copii de aici
                                  'Booking',
                                '</div>',
                                '<div class="loginForm">', 
                                  '<form name="book" action="" method="post">', 
                                    '<div id="registerForm" class="form1">',
                                      '<h3 style="color: #003580;">* Personal Information</h3>',
                                      'First Name: <input type="text"  id="r_firstName" maxlength="40" autocomplete="off" name="firstName" style="float: right;"><hr>',
                                      'Last Name: <input type="text"  id="r_lastname" maxlength="40" autocomplete="off" name="lastName" style="float: right;"><hr>',
                                      'Adress: <input type="text" id="r_address" maxlength="" autocomplete="off" name="address" style="float: right;"><hr>',
                                      'Mobile: <input type="text" id="r_mobile" maxlength="40" autocomplete="off" name="mobile" style="float: right;"><hr>',
                                      'Email: <input type="email" id="r_email" maxlength="40" autocomplete="off" name="email" style="float: right;"><hr>',
                                      '<h3 style="color: #003580;">* Requested Space</h3>',
                                      'Nr. Adults: <input type="number" id="r_adulti" maxlength="40" autocomplete="off" name="phone" style="margin-left: 4px; margin-right: 120px;">',
                                      'Nr. Children: <input type="number" id="r_copii" maxlength="40" autocomplete="off" name="phone" style=""><hr>',
                                      'Nr. Rooms: <input type="number" id="r_camere" maxlength="40" autocomplete="off" name="phone" style="margin-right: 120px;">',
                                      'Nr. Nights: <input type="number" id="r_night" maxlength="40" autocomplete="off" name="phone" style="margin-left: 15px;"><hr>',
                                      'Start Date: <input type="date" id="r_start" maxlength="40" autocomplete="off" name="phone" style="margin-left: 6px; margin-right: 120px;">',
                                      'End Date : <input type="date" id="r_end" maxlength="40" autocomplete="off" name="phone" style="margin-left: 19px;"><hr>',

                                      '<input type="button"  onclick="register()" value="Rezerv" class="login-button" style="float: right;"> ',
                                      '<div id="r_error"></div>',
                                    '</div>',
                                  '</form>',
                                '</div>', // pana aici 
                            '</div>',
                        '</div>',
                    '</div>',
                        '<div class="d_type"><img src="resources/imagini/type-icon.png" style="width:15px; height: 15px; margin-top: 1px; margin-right: 3px">',words[0],'</div>',
                        '<div class="d_loc"><img src="resources/imagini/location-icon.png" style="width:15px; height: 15px; margin-top: 1px; margin-right: 3px">',words[1],'</div>',
                        
                    '</div>',
                   ' <div class="description_t">',words[4],'</div>',
                    '<div class="description_f">',
                        '<h3>Facilities</h3>',
                       ' <ul>',
                          '  <li>Ceva</li>',
                          '  <li>Ceva</li>',
                           ' <li>Ceva</li>',
                           ' <li>Ceva</li>',
                           ' <li>Ceva</li>',
                       '</ul>',
                   ' </div>',
               '</div>',
           ' </div>',
       ' </article>',
    
    '</div>'].join('');
     
    var put=document.getElementById('main_article');
    put.innerHTML=htmlToInsert;            
            
}




function myFunction(){



var ajaxRequest; 
  var searchVar,
     rangeVal1,
     rangeVal2; 

   searchVar = document.getElementById('searchVal').value;
   rangeVal1 = document.getElementById('amountInput').value;
   rangeVal2 = document.getElementById('amountInput2').value;
   
  param=  'searchVar='+searchVar.toUpperCase()+'&'+'rangeVal1='+rangeVal1.toUpperCase()+'&'+'rangeVal2='+rangeVal2.toUpperCase();
   

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
      yy(ajaxRequest.responseText,'resullts');
    }
  }



  ajaxRequest.open("POST", "searchFunction.php", true);
  ajaxRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  ajaxRequest.send(param);



}