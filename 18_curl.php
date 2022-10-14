<?php

$url = 'https://jsonplaceholder.typicode.com/users';

// sample example
$resource = curl_init($url);
curl_setopt($resource, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($resource);
$code = curl_getinfo($resource, CURLINFO_HTTP_CODE);

echo '<pre>';
var_dump($code);
echo '</pre>';
echo $result;

$user = [
    'name' => 'John Doe',
    'username' => 'JDoe',
    'email' => 'jdoe@example.com',
];

// Post request
$resource = curl_init();
curl_setopt_array($resource, [
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_HTTPHEADER => ['content-type: application/json'],
    CURLOPT_POSTFIELDS => json_encode($user)
]);

$result = curl_exec($resource);
curl_close($resource);
echo $result;
