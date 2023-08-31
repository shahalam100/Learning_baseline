<?php 
if(isset($_POST['fname'])){
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$company=$_POST['company'];
$email=$_POST['email'];
$phone=$_POST['phone'];
}

$api_url = 'https://www.zohoapis.in/crm/v2/Leads';
//$auth_token means => access token :=> It will be always after 1 hr automatically...
$access_token = '1000.2fd1d12797122279d17736e848042406.ed2bb1dae23b9e398cfe68a4c5c1e642';

$data = array(
    'data' => array(
        array(
            'Company' => $company,
            'Last_Name' => $lname,
            'First_Name' => $fname,
            'Email' => $email,
            'Phone' => $phone
        )
    )
);
$json_data = json_encode($data);
    
$ch = curl_init($api_url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Authorization: Bearer ' . $access_token,
    'Content-Type: application/json'
));

$response = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error: ' . curl_error($ch);
}
curl_close($ch);
if($response){
	echo "true";
}
?>
