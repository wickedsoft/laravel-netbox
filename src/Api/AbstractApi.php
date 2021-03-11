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
    protected function post($parameters)
    {
        return $this->client->getHttpClient()->post(array_merge([
            'api_key' => $this->client->getHttpClient()->getOptions()['key']
        ], $parameters));
    }
    
    /**
     * @param array $parameters
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    protected function put($parameters)
    {
        return $this->client->getHttpClient()->put(array_merge([
            'api_key' => $this->client->getHttpClient()->getOptions()['key']
        ], $parameters));
    }
        
    /**
     * @param array $parameters
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    protected function delete($parameters)
    {
        return $this->client->getHttpClient()->delete(array_merge([
            'api_key' => $this->client->getHttpClient()->getOptions()['key']
        ], $parameters));
    }
}
