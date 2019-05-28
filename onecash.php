<?php

$banner = "\033[1;35m
       __       _       __
      / /__    (_)___ _/ /______ _
 __  / / _ \  / / __ `/ //_/ __ `/
/ /_/ /  __/ / / /_/ / ,< / /_/ /
\____/\___/_/ /\__,_/_/|_|\__,_/
         /___/
\033[0;32m=========================================================
\033[1;32mAuthor By \033[1;31m :\033[1;0m Kadal15
\033[1;32mChannel Yt\033[1;31m : \033[1;0mJejaka Tutorial

";




echo $banner;

echo "\033[1;32mEnter Phone Number\033[1;31m :\033[1;0m ";
$em = trim(fgets(STDIN));
echo "\033[1;32mEnter Pasword\033[1;31m :\033[1;0m ";
$pas = trim(fgets(STDIN));

system("clear");
$ua = array("User-Agent: Mozilla/5.0 (Linux; Android 5.1; A1603 Build/LMY47I; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/43.0.2357.121 Mobile Safari/537.36");
$login = "http://onecashspin.tk/control/wp-includes/three/login.php";

$data = "mobile=".$em."&password=".$pas."&log_user=";
echo $banner;

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $login);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$result = curl_exec($ch);
$a = explode('<center><button type="submit" onclick="Android.taskSpin(', $result);
$b = explode(')" class="task-btn title">Spin Now</button></center>', $a[1]);
$a1 = explode('var deviceId = "', $result);
$b1 = explode('";', $a1[1]);
$tid = $b[0];
$aid = $b1[0].$b[0];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://onecashspin.tk/control/wp-includes/three/dashup.php");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$result = curl_exec($ch);
$a2 = explode('<td class="td-left"><span class="title">BALANCE</span> <br /><strong>',$result);
$b2 = explode('</strong></td>', $a2[1]);
echo "\033[1;32mBalance\033[1;31m :\033[1;0m ".$b2[0]."\n";


$claim = "http://onecashspin.tk/control/wp-includes/three/claim-spin.php?sip=[0]&tid=".$tid."&aid=".$aid;



echo "\n\n\n\033[1;37mMemualai Menuyul.....!\n";
while(true){
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $claim);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
  curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
  $result = curl_exec($ch);
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, "http://onecashspin.tk/control/wp-includes/three/dashup.php");
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
  curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
  $result = curl_exec($ch);
  $a2 = explode('<td class="td-left"><span class="title">BALANCE</span> <br /><strong>',$result);
  $b2 = explode('</strong></td>', $a2[1]);
  echo "\033[1;30m# \033[1;32mSuccess To Get Reward \033[1;34m<=>\033[1;31m [\033[1;0m".$b2[0]."\033[1;31m]\n";
  sleep(15);

}
