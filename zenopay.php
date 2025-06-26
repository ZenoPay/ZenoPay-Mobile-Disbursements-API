<?php
$url = 'https://zenoapi.com/api/payments/walletcashin/process/';
$data = [
  "transid" => "7pbBX-lnnASw-erwnn-nrrr09AZ",
  "utilitycode" => "CASHIN",
  "utilityref" => "0744963858",
  "amount" => 3000,
  "pin" => 0000
];

$headers = [
  'Content-Type: application/json',
  'x-api-key: YOUR_API_KEY'
];

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);
curl_close($ch);

echo $response;
?>
