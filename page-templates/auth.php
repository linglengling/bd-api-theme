<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
function getAuth(){
$host = 'http://sc.score24.com/scorecenter/api/stats/security/authenticate';
$user_name = $partner;
$password = $apiKey;
$cookie_name = "apiToken";
$ch = curl_init($host);
$headers = array(
'Content-Type: application/json',
'Authorization: Basic 5score:BCC*}7`w3c=|/T*_.WNVV(VX<}Le^K'
);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($ch);
if(curl_errno($ch)){
// throw the an Exception.
throw new Exception(curl_error($ch));
}
curl_close($ch);
//echo $response;
$decoded_json = json_decode($response, false);
$time=time();
//setcookie($cookie_name, $decoded_json->accessToken, time()+86400);
return $decoded_json->accessToken;
}
function getLiveAuth(){
$host = 'http://sc.score24.com/scorecenter/api/livescore/security/authenticate';
$user_name = $partner;
$password = $apiKey;
$ch = curl_init($host);
$headers = array(
'Content-Type: application/json',
'Authorization: Basic 5score:BCC*}7`w3c=|/T*_.WNVV(VX<}Le^K'
);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($ch);
if(curl_errno($ch)){
// throw the an Exception.
throw new Exception(curl_error($ch));
}
curl_close($ch);
//echo $response;
$decoded_json = json_decode($response, false);
return $decoded_json->accessToken;
}
?>
