<?php

$username = 'user';
$password = 'password';
$ch = curl_init();
$URL = 'http://localhost/tom-immo/public/api/index/properties';

$postfields = array(
    "id"=> 2,
    "city" => "Lièvin",
    "address" => "rue de la paix",
    "country" => "France",
    "zipcode" => 62950,
    "num" => 13
);

curl_setopt($ch, CURLOPT_URL, $URL);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postfields));

$result = curl_exec($ch);
curl_close($ch);

echo $result;