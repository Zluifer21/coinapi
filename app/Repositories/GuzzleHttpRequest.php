<?php

namespace App\Repositories;

use GuzzleHttp\Client;

class  GuzzleHttpRequest
{
    protected $client;

    /**
     * Instance the request in the AppServiceProvider register
     * Inject the class GuzzleHttp\Client and assign it to the object
     * GuzzleHttpRequest constructor.
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * get the assets from api
     * @param $url
     * @return json obeject
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function get($url)
    {
        $response = $this->client->request('GET', $url);
        return json_decode($response->getBody()->getContents());
    }
}
