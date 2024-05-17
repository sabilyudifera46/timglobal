<?php 
$id = $_POST['id'];
$key = $_POST['key'];
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://localhost/timglobal/nomor3/server/resto.php?id='.$id,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'DELETE',
  CURLOPT_HTTPHEADER => array(
    'key: '.$key,
    'Cookie: PHPSESSID=i0aif8nh25108fa25cnm687i4r'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;

?>