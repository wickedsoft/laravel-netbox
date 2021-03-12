<?php

namespace wickedsoft\NetBox;

use wickedsoft\NetBox\HttpClient\HttpClient;

class Client
{
    /** @var array */
    protected $classes = [
        'ip' => 'Ip',
        /*'providers' => 'Providers',
        'circuits' => 'Circuits',
        'sites' => 'Sites',
        'racks' => 'Racks',
        'devices' => 'Devices',
        'prefixes' => 'Prefixes',
        'cables' => 'Cables',
        'interfaces' => 'Interfaces',
        'rirs' => 'Rirs',
        'vlans' => 'Vlans',
        'vrfs' => 'Vrfs',
        'secrets' => 'Secrets',
        'tenants' => 'Tenants',
        'users' => 'Users',
        'clusters' => 'Clusters',*/
        
    ];

    /** @var \wickedsoft\NetBox\HttpClient */
    protected $httpClient;

    /** @var array */
    protected $options = [];

    /**
     * @param $method
     * @param $args
     * @return mixed
     */
    public function __call($method, $args)
    {
        try {
            return $this->api($method);
        } catch (InvalidArgumentException $e) {
            throw new \BadMethodCallException(sprintf('Undefined method called:"%s"', $method));
        }
    }

    /**
     * @param $name
     * @return mixed
     */
    public function api($name)
    {
        if (!isset($this->classes[$name])) {
            throw new \InvalidArgumentException(sprintf('Undefined method called:"%s"', $name));
        }

        $class = '\\wickedsoft\\NetBox\\Api\\' . $this->classes[$name];

        return new $class($this);
    }

    /**
     * @return HttpClient
     */
    public function getHttpClient()
    {
        if (!isset($this->httpClient)) {
            $this->httpClient = new HttpClient();
        }

        $this->httpClient->setOptions($this->getOptions());

        return $this->httpClient;
    }

    /**
     * @return array
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param $options
     */
    public function setOptions($options)
    {
        $this->options = $options;
    }
}
