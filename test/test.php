<?php

require __DIR__."/../vendor/autoload.php";

use IpdTv\Client;

$ipdTvClient = new Client([
    'application_id' => '0',
    'application_secret' => '0',

    'verbose' => true
]);

echo "[IPD TV API TEST]\n";
$data_source = 'data_source-13939';
echo "Pushing data to source $data_source \n";
$response = $ipdTvClient->pushData($data_source, [
    "data:1" => 'COVID voyageurs',
    "data:2" => 'account-multiple-outline',
    "data:3" => rand(1000, 999),
    "data:4" => "voyageurs enregistrés",
]);

var_dump('$response', $response);