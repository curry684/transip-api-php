<?php

require('Authenticate.php');

$vpsName = '';
$snapshotName = '';
$destinationVpsName = '';

$response = $api->vpsSnapshots()->revertSnapshot($vpsName, $snapshotName, $destinationVpsName);
$action = $api->actions()->parseActionFromResponse($response);
echo var_dump($action);
