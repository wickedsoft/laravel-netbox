<?php

namespace wickedsoft\NetBox\HttpClient;

interface HttpClientInterface
{
    /**
     * @return array
     */
    public function getOptions();

    /**
     * @param array $body
     * @return mixed
     */
    public function get($path, $body = []);

    /**
     * @param array $body
     * @return mixed
     */
    public function post($path, $body = []);

    /**
     * @param array $body
     * @return mixed
     */
    public function put($path, $body = []);

    /**
     * @param array $body
     * @return mixed
     */
    public function delete($path, $body = []);

    /**
     * @param $body
     * @param $method
     * @return mixed
     */
    public function request($body, $method);

    /**
     * @param array $options
     */
    public function setOptions(array $options);
}
