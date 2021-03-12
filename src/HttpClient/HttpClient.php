<?php

namespace wickedsoft\NetBox\HttpClient;

class HttpClient implements HttpClientInterface
{
    /** @var \GuzzleHttp\Client */
    protected $client;

    /** @var array */
    protected $options = [];

    /**
     * @return \GuzzleHttp\Client
     */
    public function getClient()
    {
        if (!isset($this->client)) {
            $this->client = new \GuzzleHttp\Client(config('netbox.client_options', []));

            return $this->client;
        }

        return $this->client;
    }

    /**
     * @param $client
     * @return \GuzzleHttp\Client
     */
    public function setClient($client)
    {
        $this->client = $client;

        return $this->client;
    }

    /**
     * @param array $body
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function get($path, $body = [])
    {
        return $this->request($path, $body, 'GET');
    }

    /**
     * @param array $body
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function post($path, $body = [])
    {
        return $this->request($path, $body, 'POST');
    }

    /**
     * @param array $body
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function put($path, $body = [])
    {
        return $this->request($path, $body, 'PUT');
    }

    /**
     * @param array $body
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function delete($path, $body = [])
    {
        return $this->request($path, $body, 'DELETE');
    }

    /**
     * @param $body
     * @param $method
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function request($path, $body, $method)
    {
        $response = $this->getClient()->request(
            $method,
            $path,
            [
                'form_params' => $body
            ]
        );

        return json_decode((string)$response->getBody(), true);
    }

    /**
     * @return array
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param array $options
     */
    public function setOptions(array $options)
    {
        $this->options = array_merge($this->options, $options);
    }
}
