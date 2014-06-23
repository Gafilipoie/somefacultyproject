<?php

$host="fenrir.info.uaic.ro"; // Host name 
$db_username="NELO"; // Mysql username 
$db_password="sjOqapXt5L"; // Mysql password 
$db_name="NELO"; // Database name 
$tbl_name="user_login"; // users name 
$tblh_name="hotels";// hotels table

	
	$r_firstName = $_POST['r_firstName'];
	$r_lastname = $_POST['r_lastname'];
	$r_address = $_POST['r_address'];
	$r_mobile = $_POST['r_mobile'];
	$r_email = $_POST['r_email'];
	$r_adulti = $_POST['r_adulti'];
	$r_copii = $_POST['r_copii'];
	$r_camere = $_POST['r_camere'];
	$r_start = $_POST['r_start'];
	$r_end = $_POST['r_end'];
	$r_night = $_POST['r_night'];
    $logged = $_POST['logged']; 
    $hotelid = $_POST['hotelid'];
    
$r_firstName = stripslashes($r_firstName);
$r_lastname = stripslashes($r_lastname);
$r_address = stripslashes($r_address);
$r_email = stripslashes($r_email);
$r_mobile = stripslashes($r_mobile);
$r_adulti = stripslashes($r_adulti);
$r_copii = stripslashes($r_copii);
$r_camere = stripslashes($r_camere);
$r_start = stripslashes($r_start);
$r_end = stripslashes($r_end);
$r_night = stripslashes($r_night);
$hotelid = stripslashes($hotelid);

	$dbhandle=mysqli_connect("$host", "$db_username", "$db_password")or die("cannot connect"); 
    $selected=mysqli_select_db($dbhandle,"$db_name")or die("cannot select DB");
    $sql="SELECT * FROM $tblh_name WHERE ID_Hotel = '$hotelid'";
	$result=mysqli_query($dbhandle,$sql);
	$count=mysqli_num_rows($result);
     $result = mysqli_fetch_array($result);
    if(!($r_firstName=='' || $r_lastname =='' ||  $r_address =='' || $r_email == '' || $r_mobile =='' || $r_adulti =='' || $r_camere =='' || $r_start=='' || $r_end =='' || $r_night=='')){
    if($logged  == 1)
    	{    
    		
                $tbl_name="rezervari"; // users name 
                $tblu_name="user_login";// hotels table


                $dbhandle=mysqli_connect("$host", "$db_username", "$db_password")or die("cannot connect"); 
                $selected=mysqli_select_db($dbhandle,"$db_name")or die("cannot select DB");

                $rez_uID =0;
                $rez_hID=$hotelid;
                $start_date=$r_start;
                $end_date=$r_end ;
                $nr_camera=$r_camere*$r_adulti*$r_night;
                $tip_camere='Double';
                $pret=633;

                            if($rez_uID == 0){
                                 $sql1="SELECT ID_User FROM $tblu_name WHERE FirstName = '$r_firstName';";
                                 $result=mysqli_query( $dbhandle,$sql1);
                                 $row=mysqli_fetch_array($result);
                                 $rez_uID=$row['ID_User'];
                            }   


                $rez_uID = stripslashes($rez_uID);
                $rez_hID = stripslashes($rez_hID);
                $start_date = stripslashes($start_date);
                $end_date = stripslashes($end_date);
                $nr_camera = stripslashes($nr_camera);
                $tip_camere = stripslashes($tip_camere);
                $pret = stripslashes($pret);
    

                $sql="INSERT INTO $tbl_name(COD, r_show, ID_User, ID_Hotel, Start_date, End_date, NR_Camera, TIP_Camere, `Price`)  VALUES (null,0,$rez_uID,$rez_hID,'$start_date','$end_date',$nr_camera,'$tip_camere',$pret);";

                
                $result=mysqli_query( $dbhandle,$sql);
                 
                echo 'Rezervare realizata';
        
            $to      =  'the.nelo.web@gmail.com';//$r_email;
            $subject = 'Rezervare la '.$row1['h_name'];
			$message = 'Buna ziua! Acest email este valid si trebuie structurat cum trecuie de pe '.$r_start.'pana pe '.$r_end;
			$headers = 'From: the.nelo.web@gmail.com' . "\r\n" .
			    'Reply-To: the.nelo.web@gmail.com' . "\r\n" .
			    'X-Mailer: PHP/' . phpversion();

        mail($to, $subject, $message, $headers);
        
        $sql="SELECT * FROM $tblh_name WHERE ID_Hotel = '$hotelid'";
	    $result=mysqli_query($dbhandle,$sql);
    	}else{
    		if($logged  == 2)
    		{
    			echo 'esti logat ca hotel';
    		}else{
		      $to =  'the.nelo.web@gmail.com';//$r_email;
            $subject = 'Rezervare la '.$row1['h_name'];
			$message = 'Buna ziua! Acest email este valid si trebuie structurat cum trecuie de pe '.$r_start.'pana pe '.$r_end;
			$headers = 'From: the.nelo.web@gmail.com' . "\r\n" .
			    'Reply-To: the.nelo.web@gmail.com' . "\r\n" .
			    'X-Mailer: PHP/' . phpversion();

            mail($to, $subject, $message, $headers);}
    }
}else{
     if($logged  == 0){
        echo 'Cererea Dumneavoastra a fost procesata. Asteptati un mail de confirmare. Multumim!';
     }else{
     $errormsg= "Campuri libere";
      echo  $errormsg;}
    }
?>



