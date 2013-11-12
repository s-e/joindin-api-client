<?php
use Guzzle\Service\Description\ServiceDescription;
use Guzzle\Service\Client as GuzzleClient;

require("vendor/autoload.php");

$api = new GuzzleClient;
$desc = ServiceDescription::factory('joindin-service-description.json');

$api->setDescription($desc);
$command = $api->getCommand('getEvents');
$response = $api->execute($command);

<<<<<<< Updated upstream
print_r($response);
=======
print_r($response);
unset($command);
unset($reponse);

$command = $api->getCommand('getEventTalks');
$response = $api->execute($command, compact($eventId));

print_r($response);
unset($command);
unset($reponse);

$command = $api->getCommand('getEventTalkComments');
$response = $api->execute($command, compact($eventId, $talkId));

print_r($response);
unset($command);
unset($reponse);

$command = $api->getCommand('getUser');
$response = $api->execute($command, compact($userId));

print_r($response);
unset($command);
unset($reponse);
>>>>>>> Stashed changes
