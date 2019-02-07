<?php



require "vendor/autoload.php";

$access_token = 'P/sgtVp2vonaCA91dELVzY/HC9/IQFMSLu7a94/qcQB0muF5JvYy5QY4FMiwMTTEOjj/3OjReCjbyXadBSDPiy0Y32k0h16MZHAZjoDERad2hP3492N55o3X1tYwOxIkfQU8mgyztQB9wOFUOFm/CQdB04t89/1O/w1cDnyilFU=
';

$channelSecret = '46bbb4575cb14105257dcbe34f57c5a3';

$pushID = 's8tm4prcnBI18M1hvaTAw5JacBmMuVDRfuGEwhWbd80';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







