<?php


$access_token = 'P/sgtVp2vonaCA91dELVzY/HC9/IQFMSLu7a94/qcQB0muF5JvYy5QY4FMiwMTTEOjj/3OjReCjbyXadBSDPiy0Y32k0h16MZHAZjoDERad2hP3492N55o3X1tYwOxIkfQU8mgyztQB9wOFUOFm/CQdB04t89/1O/w1cDnyilFU=
';

$userId = 'U9f6c101adc821c4fee95c3cacc9e478b';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

