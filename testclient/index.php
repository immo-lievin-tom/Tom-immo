<?php
require './vendor/autoload.php';


$client = new \GuzzleHttp\Client();
$response = $client->request('GET', 'http://localhost/tom-immo/public/api/index/properties', ['auth' => ['user', 'password']]);

echo $response->getStatusCode(); // 200
echo $response->getHeaderLine('content-type'); // 'application/json; charset=utf8'
echo $response->getBody(); // '{"id": 1420053, "name": "guzzle", ...}'


// // Send an asynchronous request.
// $request = new \GuzzleHttp\Psr7\Request('GET', 'http://httpbin.org');
// $promise = $client->sendAsync($request)->then(function ($response) {
//     echo 'I completed! ' . $response->getBody();
// });

// $promise->wait();