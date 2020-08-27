<?php

namespace IpdTv;

class Client extends \Core\BaseClient {

    const API_BASE_PATH = 'http://tv.pasteur.sn/api/v1/';

    function pushData($dataSourceUid, $values){
        $postData = [
            'data_source_uid' => $dataSourceUid,
            'values' => json_encode($values)
        ];

        return $this->postRequest($postData);
    }

    function postRequest($postData){
        $path = 'data_source/push';

        return $this->executePost($path, $postData);
    }
}