<?php

require __DIR__."/../vendor/autoload.php";

use IpdTv\Client;

$ipdTvClient = new Client([
    'application_id' => '0',
    'application_secret' => '0'
]);

$response = $ipdTvClient->pushData('data_source-13939', [
    "data:1" => 'COVID voyageurs',
    "data:2" => 'account-multiple-outline',
    "data:3" => $stats && $stats['status'] == 'ok' ? $stats['data'] : '---',
    "data:4" => "voyageurs enregistrés",
]);

var_dump('$response', $response);