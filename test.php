<?php
use Guzzle\Service\Description\ServiceDescription;
use Guzzle\Service\Client as GuzzleClient;

require("vendor/autoload.php");



$api = new GuzzleClient;
$desc = ServiceDescription::factory('joindin-service-description.json');

$eventId = 34;
$talkId = 147;
$userId = 19;


$api->setDescription($desc);
$command = $api->getCommand('getEvents');
$response = $api->execute($command);

print_r($response);
unset($command);
unset($reponse);

$command = $api->getCommand('getEventTalks', compact('eventId'));
    try {
        $response = $api->execute($command);
    } catch(\Exception $e) {
        $response = "whoops 1.\n" . $e->getMessage() . "\n ";
    }

print_r($response);
unset($command);
unset($reponse);

$command = $api->getCommand('getEventTalkComments', compact('eventId', 'talkId'));
    try {
        $response = $api->execute($command);
    } catch(\Exception $e) {
        $response = "whoops 2.\n";
    }

print_r($response);
unset($command);
unset($reponse);

$command = $api->getCommand('getUser', compact('userId'));
    try {
        $response = $api->execute($command);
    } catch(\Exception $e) {
        $response = "whoops 3.\n";
    }

print_r($response);
unset($command);
unset($reponse);
