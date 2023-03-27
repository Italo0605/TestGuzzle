<?php
require 'vendor/autoload.php';
$client = new GuzzleHttp\Client(['verify' => false]);
$response = $client->request("GET" , 'https://api.airtable.com/v0/appmqpS7OnG2HoMdQ/tbl1ddfcvVHCEwtkv', [
    'headers' => [
        'Authorization' => 'Bearer patFDp7NFWwXIVZyH.9c7a3275adb495a2a53a9a5e635d514e9da4687786fa125db4f736f874d7dd50',
        'Content-Type' => 'application/json'
    ],
]);
$json = json_decode($response->getBody(), true);
print_r($json); 

?>