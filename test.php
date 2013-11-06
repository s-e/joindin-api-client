<?php
use Guzzle\Service\Description\ServiceDescription;
use Guzzle\Service\Client as GuzzleClient;

require("vendor/autoload.php");

$api = new GuzzleClient;
$desc = ServiceDescription::factory('joindin-service-description.json');

$api->setDescription($desc);
$command = $api->getCommand('getEvents');
$response = $api->execute($command);

print_r($response);