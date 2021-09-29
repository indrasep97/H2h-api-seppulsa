<?php
Class H2h_seppulsa
{
const API_KEY = ''; //isi apikey yang ada di menu api seppulsa
const USER_ID = '';  //isi user id yang ada di menu api seppulsa

function cek_saldo(){

$data = [
 'user_id'=> self::USER_ID,
 'key' => self::API_KEY,
];
$params = http_build_query($data);
$url = "https://seppulsa.com/api/saldo?$params"
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => $url,
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
