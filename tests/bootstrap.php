<?php
require __DIR__ . '/../vendor/autoload.php';

function loadESMSDK()
{
    return new \Xigen\ESM([
        'URL' => 'https://signaturemanager.co.uk/api/rest/v2/',
        'APIKEY' => 'TestAPIKEY'
    ]);
}
