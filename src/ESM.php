<?php
namespace Xigen;

use GuzzleHttp\Client;

class ESM
{
    use Shortcuts\Client;
    use Shortcuts\Templates;

    public $responseData;
    public $options;
    private $client;
    private $response;

    public function __construct($options)
    {
        $this->options = $options;
        $this->client = new Client([
            'base_url' => [$this->options['URL'], ['version' => 'v2']]
        ]);
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
        return @json_decode($data);
    }

    private function get($endpoint)
    {
        try {
            $response = $this->client->post($this->options['URL'] . $endpoint, [
                'body' => [
                    'APIKEY' => $this->options['APIKEY']
                ]
            ]);
            $this->responseData = (string) $response->getBody();
        } catch (\GuzzleHttp\Exception\RequestException $e) {
            var_dump($e);
        }
    }
}
