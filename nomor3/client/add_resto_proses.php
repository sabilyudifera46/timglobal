<?php
session_start();
$name = $_POST['name'];
$pass = $_POST['pass'];
$pass1 = $_POST['pass1'];
$key = $_POST['key'];
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://localhost/timglobal/nomor3/server/resto.php',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 3,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => array('name' => $name,'image_url' => $pass,'address' => $pass1),
  CURLOPT_HTTPHEADER => array(
    'key: '.$key,
    'Cookie: PHPSESSID=i0aif8nh25108fa25cnm687i4r'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;

?>