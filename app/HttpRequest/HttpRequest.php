<?php

namespace App\HttpRequest;

use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request as GuzzleHttpRequest;
use GuzzleHttp\Exception\ClientException;

abstract class HttpRequest
{
    public $request;

    public function setHeaders()
    {
        $this->headers = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
        ];
    }

    public function sendRequest($method, $url, $body = null)
    {
        $this->setHeaders();
        try {
            $client = new Client();
            $this->request = new GuzzleHttpRequest($method, $url, $this->headers, $body);
            return $client->sendAsync($this->request)->wait();
        } catch (ClientException $e) {
            $response = $e->getResponse();
            $response = json_decode($response->getBody(), true);
            throw new Exception($response['message']);
        } catch (Exception $e) {
            throw new Exception($e);
        }
    }
}
