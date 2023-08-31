<?php
session_start();

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://accounts.zoho.in/oauth/v2/token?refresh_token=1000.c8b118be4d43f03acc08c4369044b615.7f553dd39424addaa2abe69a5faa92c1&client_id=1000.NYG0IKVF2FZ1URCX65JOMEN6VEB3VN&client_secret=3fd49aab177fdd4919ed10de4c3fb62f915cba84a3&redirect_uri=http%3A%2F%2Flocalhost%2Fzoho%2Ftest.php&grant_type=refresh_token',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_HTTPHEADER => array(
    'Cookie: 6e73717622=94da0c17b67b4320ada519c299270f95; _zcsr_tmp=d344ba82-006a-4c38-b97e-6b3bea35ffe1; iamcsr=d344ba82-006a-4c38-b97e-6b3bea35ffe1'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
return $response;


