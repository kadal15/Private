<?php


$index = "https://allowweb.com/supersatoshi/index.php/dashboard";
$desable = "https://allowweb.com/supersatoshi/index.php/dashboard/getDesabledButtons";
$addpoint = "https://allowweb.com/supersatoshi/index.php/balance/addPoint";


$headers = array();
$headers[] = "X-Requested-With: XMLHttpRequest";
$headers[] = "User-Agent: Mozilla/5.0 (Linux; Android 5.1; A1603 Build/LMY47I; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/43.0.2357.121 Mobile Safari/537.36";
$headers[] = "Content-Type: application/x-www-form-urlencoded; charset=UTF-8";
$headers[] = "Cookie: __cfduid=d4ac37c2ff2fd1e3fa4d952737f4ce8031553042788; ci_session=2i45lkr47la36djet29q180kett9gq0h; _ga=GA1.2.2108446481.1553042789; _gid=GA1.2.1721721265.1553690985; _gat_gtag_UA_27145904_51=1";



function res($desable, $headers, $index){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $desable);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_REFERER, $index);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_POST, 1);
    $result = curl_exec($ch);
    curl_close($ch);

}

function claim($addpoint){
  $no = array("1","2","3","4","5");
  foreach($no as $data1){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $addpoint);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_REFERER, $index);
    $ua = array();
    $ua[] = "User-Agent: Mozilla/5.0 (Linux; Android 5.1; A1603 Build/LMY47I; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/43.0.2357.121 Mobile Safari/537.36";
    $ua[] = "Cookie: __cfduid=d4ac37c2ff2fd1e3fa4d952737f4ce8031553042788; ci_session=2i45lkr47la36djet29q180kett9gq0h";
    curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
    curl_setopt($ch, CURLOPT_POST, 1);
    $data["id"] = $data1;
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    $result = curl_exec($ch);
    curl_close($ch);
    $json = json_decode($result, true);
    echo "Message : ".$json["message"]." | Ballance : ".$json["pointBalance"]."\n";
    sleep(90);
  }
}



$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $index);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$result = curl_exec($ch);
curl_close($ch);
$one = explode('<b  id="pointBalance">', $result);
$two = explode('</b>', $one[1]);
echo "Ballance : ".$two[0]." Point\n";



echo "\n\n\nStar Claiming......!\n";
while (True){
    res($desable, $headers, $index);
    claim($addpoint, $headers, $no);
}

?>