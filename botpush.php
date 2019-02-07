<?php



require "vendor/autoload.php";

$access_token = 'G89FTlfAWoeKNhusOgTiNcioV8ijAzB3r61RzZvfqnI2+QpZGLaDv3YwVBoqPla1Ojj/3OjReCjbyXadBSDPiy0Y32k0h16MZHAZjoDERafU1vH7st8kBmvaspcuK6KX9HeV3K/u/qaQaX+8o8oNUQdB04t89/1O/w1cDnyilFU=';

$channelSecret = '46bbb4575cb14105257dcbe34f57c5a3';

$pushID = 's8tm4prcnBI18M1hvaTAw5JacBmMuVDRfuGEwhWbd80';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







