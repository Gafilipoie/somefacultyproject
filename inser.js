
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

function insert() {
  console.log(today);
	var put = document.getElementById('main_article');
    var bookNow=[ 
                        
                            'Destination/Hotel Name:<br> ',
                            '<input type="search" name="search" size="25" autocomplete="off" placeholder="e.g. City or Specific Hotel">',
                        '<br>',
                           ' Buget between:<br> ',
                            '<input type="range" name="amountRange" min="0" max="500" value="0" step="10" oninput="this.form.amountInput.value=this.value" />',
                            '<input type="number" name="amountInput" min="0" max="500" value="0" step="10" oninput="this.form.amountRange.value=this.value" /><br>',
                            'And<br>',
                            '<input type="range" name="amountRange2" min="0" max="500" value="0" step="10" oninput="this.form.amountInput2.value=this.value" />',
                           ' <input type="number" name="amountInput2" min="0" max="500" value="0" step="10" oninput="this.form.amountRange2.value=this.value" />',
                        '<br>',
                            'Check-in Date:<br>',
                            '<input type="date" min=" ',
                               today,
                            '" name="date"><br>',
                            'Check-out Date:<br>',
                           ' <input type="date" name="date">',
                        '<br>',
                            'Rooms: <input type="number" name="number" min="0" max="30" value="0" step="1">',
                           ' Beds: <input type="number" name="number" min="0" max="30" value="0" step="1">',
                        '<br>',
                            
                    ];
    var htmlToInsert =[
    		'<div class="hotel-block">',
                '<div class="block-body">',
                    '<a href="hotels.php">',
                        '<div class="imgWrap">',
                            '<img src="resources/imagini/',
                            hotelImages[count],
                            '.jpg" class="block-picture">',
                            '<p class="imgDescription">---------- Details ----------</p>',
                        '</div>',
                    '</a></div>',
                '<div class="block-footer">',
                    '<div class="hotel-detail">',
                        '<div class="hotel-name">',
                        hotelNames[count],
                        '</div>',
                        '<div class="hotel-location"><img src="resources/imagini/location-icon.png" style="width:15px; height: 15px; margin-top: 1px; margin-right: 3px">Cluj</div>',
                        '<div class="hotel-type"><img src=""><img src="resources/imagini/type-icon.png" style="width:15px; height: 15px; margin-top: 1px; margin-right: 3px">Hotel</div></div>',
                    '<div class="rezervation">',
                        '<a href="#modalReservation">Book Now!</a>',

                        '<div id="modalReservation" class="modalReservation">',
                            '<div>',
                                '<a href="#closeReservation" title="Close" class="closeReservation">X</a>',
                                'Form Rezervation',
                                bookNow,
                            '</div>',
                        '</div>',
                    '</div>',
                    '<div class="hotel-description">',
                        '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi.</p',
                    '</div></div></div>',			
].join('');
 for(var i=0;i<9;i++){
     if(count==0 && ok==0){
     	var x = ['<div class="heading">',
                'Hotels',
                '<span class="red"></span>',
                '<span class="yellow"></span>',
                '<span class="green"></span>',
                '<span class="blue"></span></div>'].join('');
     put.innerHTML = x+put.innerHTML+htmlToInsert; 
     ++count;
     ok++;
     }else{
       count++;
       put.innerHTML = put.innerHTML+htmlToInsert; 
        if(count==3)
         count=0;       }
     }
  }