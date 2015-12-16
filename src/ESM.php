<?php
namespace Xigen;

use GuzzleHttp\Client;

class ESM
{
    public $responseData;
    public $options;
    private $client;
    private $response;

    public function __construct($options)
    {
        $this->options = $options;
        $this->client = new Client();
    }

    public function testConnection()
    {
        $this->get('/ping');
    }

    public function getRequestData($JsonDecode = true)
    {
        if ($JsonDecode == true) {
            $this->responseData = $this->__toArray($this->responseData);
        }

        return $this->responseData;
    }

    public function __toArray($data)
    {
        return json_decode($data);
    }

    private function get($endpoint)
    {
        try {
            $response = $this->client->request('POST', $this->options['URL'] . $endpoint, [
                'form_params' => [
                    'APIKEY' => $this->options['APIKEY']
                ]
            ]);
            $this->responseData = (string) $response->getBody();
        } catch (\GuzzleHttp\Exception\RequestException $e) {
            var_dump($e);
        }
    }
}
