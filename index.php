<?php


session_start();


	/*$purpose=$_GET['purpose'];
	$amt=$_GET['amt'];
	$phno=$_GET['phno'];*/
	$name=$_GET['name'];
	//$mail=$_GET['mail'];


$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://test.instamojo.com/api/1.1/payment-requests/');
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER,
            array("X-Api-Key:test_a8c39fb320e01502402cb6e6771",
                  "X-Auth-Token:test_8248ac0598e5f71364f79fd0495"));
$payload = Array(
    'purpose' => 'Buy painting',
    'amount' => '100',
    'phone' => '9874563210',
    'buyer_name' => '$name',
    'redirect_url' => 'http://www.example.com/redirect/',
    'send_email' => true,
    'send_sms' => true,
    'email' => 'palak@gmail.com',
    'allow_repeated_payments' => false
);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
$response = curl_exec($ch);
curl_close($ch); 
$response=json_decode($response);

header('location:'.$response->payment_request->longurl);
die();
?>