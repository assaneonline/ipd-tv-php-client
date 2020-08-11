<?php

require __DIR__."/../vendor/autoload.php";

use IpdTv\Client;

$ipdTvClient = new Client([
    'application_id' => '0',
    'application_secret' => '0'
]);

$response = $ipdTvClient->pushData('data_source-13939', [
    'data:1' => 'api:pushed:1',
    'data:2' => 'api:pushed:2',
    'data:3' => 'api:pushed:3',
]);

var_dump('$response', $response);