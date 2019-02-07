<?php


$access_token = 'G89FTlfAWoeKNhusOgTiNcioV8ijAzB3r61RzZvfqnI2+QpZGLaDv3YwVBoqPla1Ojj/3OjReCjbyXadBSDPiy0Y32k0h16MZHAZjoDERafU1vH7st8kBmvaspcuK6KX9HeV3K/u/qaQaX+8o8oNUQdB04t89/1O/w1cDnyilFU=';

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

