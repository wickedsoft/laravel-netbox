<?php

namespace wickedsoft\NetBox\Api;

use wickedsoft\NetBox\Client;

abstract class AbstractApi implements ApiInterface
{
    /** @var \wickedsoft\NetBox\Client */
    public $client;

    /**
     * AbstractApi constructor.
     * @param \wickedsoft\NetBox\Client $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * @param array $parameters
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    protected function get($path, $parameters)
    {
        return $this->client->getHttpClient()->get($path, array_merge([
            'api_key' => $this->client->getHttpClient()->getOptions()['key']
        ], $parameters));
    }

    /**
     * @param array $parameters
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    protected function post($path, $parameters)
    {
        return $this->client->getHttpClient()->post($path, array_merge([
            'api_key' => $this->client->getHttpClient()->getOptions()['key']
        ], $parameters));
    }

    /**
     * @param array $parameters
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    protected function put($path, $parameters)
    {
        return $this->client->getHttpClient()->put($path, array_merge([
            'api_key' => $this->client->getHttpClient()->getOptions()['key']
        ], $parameters));
    }

    /**
     * @param array $parameters
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    protected function delete($path, $parameters)
    {
        return $this->client->getHttpClient()->delete($path, array_merge([
            'api_key' => $this->client->getHttpClient()->getOptions()['key']
        ], $parameters));
    }
}
