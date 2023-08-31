<?php
require 'function.php';

$accessToken = file_get_contents('accessToken.txt');
$resultData = reterive($accessToken);
if (isset($resultData['code']) && $resultData['code'] === 'INVALID_TOKEN') {
    $result = generateAccessToken();
    $NewaccessToken = $result['access_token'];
    if (file_put_contents('accessToken.txt', $NewaccessToken) !== false) {
        $resultData = reterive($NewaccessToken);
    } else {
        echo "Error: Failed to write the new access token to the file.";
    }
}
echo '<pre>';  
print_r($resultData);
echo '</pre>';
?>