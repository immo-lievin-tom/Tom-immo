<?php
$username = 'user';
$password = 'password';
$URL = 'http://localhost/tom-immo/public/api/index/properties';
$ch = curl_init();

curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
// curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");

curl_setopt($ch, CURLOPT_URL, $URL);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");
// curl_setopt($ch, CURLOPT_POST, true);
// curl_setopt($ch, CURLOPT_POSTFIELDS, $postfields);
$result = curl_exec($ch);
curl_close($ch);
echo $result;

// if (!preg_match('#Username and password do not match#i', $result))
// {
//     echo 'Connexion ok.';
// }
// else
// {
//     echo 'Connexion échoué.';
// }
