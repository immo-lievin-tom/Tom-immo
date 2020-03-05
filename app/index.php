<?php

$username = 'user';
$password = 'password';
$URL = 'http://localhost/tom-immo/public/api/index/properties';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $URL);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
// curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");
$result = curl_exec($ch);
curl_close($ch);
echo $result;