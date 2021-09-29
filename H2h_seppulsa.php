<?php
Class H2h_seppulsa
{
const API_KEY = ''; //isi apikey yang ada di menu api seppulsa
const USER_ID = '';  //isi user id yang ada di menu api seppulsa

function request($url){

$data = [
 'user_id'=> self::USER_ID,
 'key' => self::API_KEY,
];
$params = http_build_query($data);
$req = "$url?$params"
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => $req,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
));

$response = curl_exec($curl);

curl_close($curl);
return $response;
}
}
