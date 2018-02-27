<?php

namespace Cowlab\Checker;

use GuzzleHttp\Client;
use Exception;

/**
 * Http class.
 */
class Http
{
    /**
     * HTTP client.
     *
     * @var \GuzzleHttp\Client
     */
    private $client;

    /**
     * construct.
     */
    public function __construct()
    {
        $this->client = new Client();
    }

    /**
     * check http 200 ok.
     *
     * @param string $url
     *
     * @return bool
     */
    public function check(string $url)
    {
        try {
            $response = $this->client->request('GET', $url);

            return ($response->getStatusCode() === 200) ? true : false;
        } catch (Exception $e) {
            return false;
        }
    }
}
