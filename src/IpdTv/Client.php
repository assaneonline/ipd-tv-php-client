<?php

namespace IpdTv;

class Client {

    const API_BASE_PATH = 'http://tv.pasteur.sn/api/v1/';

    function __construct($configs = []){
        $this->config = $configs;
    }

    function pushData($dataSourceUid, $values){
        $postData = [
            'data_source_uid' => $dataSourceUid,
            'values' => json_encode($values)
        ];

        return $this->postRequest($postData);
    }

    function postRequest($postData){
        $ch = curl_init(self::API_BASE_PATH.'data_source/push');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
        $response = curl_exec($ch);
        curl_close($ch);
        
        if($response && strlen($response))
            return json_encode($response, true);

        return FALSE;
    }
}