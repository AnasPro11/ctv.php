<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://ahmedramzy.rf.gd/ctv.php?i=1',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'Accept:  text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
    'Accept-Encoding:  gzip, deflate',
    'Accept-Language:  en-GB,en;q=0.9,ar-EG;q=0.8,ar;q=0.7,en-US;q=0.6',
    'Cache-Control:  max-age=0',
    'Connection:  keep-alive',
    'Cookie:  __test=4e94d450484e824b27008a3e9ac06e0e',
    'Host:  ahmedramzy.rf.gd',
    'Upgrade-Insecure-Requests:  1',
    'User-Agent:  Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Safari/537.36'
  ),
));
$response = curl_exec($curl);
curl_close($curl);
$ab = explode("*", $response);
$htv = $ab[0];
$ctv = $ab[1];
echo $ctv; 
echo $htv; 
?> 