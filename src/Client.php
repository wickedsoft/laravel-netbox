<?php

namespace wickedsoft\NetBox;

use wickedsoft\NetBox\HttpClient\HttpClient;

class Client
{
    /** @var array */
    protected $classes = [
        //circuits
        'circuits' => 'Circuits',
        'circuitTypes' => 'CircuitTypes',
        'circuitTerminations' => 'CircuitTerminations',
        'providers' => 'CircuitProviders',
        'providers' => 'Providers',
        //dcim
        'cables' => 'Cables',
        'connectedDevices' => 'ConnectedDevices'
        'consoleConnections' => 'ConsoleConnections',
        'consolePortTemplates' => 'ConsolePortTemplates',
        'consolePorts' => 'ConsolePorts',
        'consoleServerPortTemplates' => 'ConsoleServerPortTemplates',
        'consoleServerPorts' => 'ConsoleServerPorts',
        'deviceBayTemplates' => 'DeviceBayTemplates',
        'deviceBays' => 'DeviceBays',
        'deviceRoles' => 'DeviceRoles',
        'deviceTypes' => 'DeviceTypes',
        'devices' => 'Devices',
        'frontPortTemplates' => 'FrontPortTemplates',
        'frontPorts' => 'FrontPorts',
        'interfaceConnections' => 'InterfaceConnections',
        'interfaceTemplates' => 'InterfaceTemplates',
        'interfaces' => 'Interfaces',
        'inventoryItems' => 'InventoryItems',
        'manufacturers' => 'Manufacturers',
        'platforms' => 'Platforms',
        'powerFeeds' => 'PowerFeeds',
        'powerOutlets' => 'PowerOutlets',
        'powerOutletTemplates' => 'PowerOutletTemplates',
        'powerPanels' => 'PowerPanels',
        'powerPorts' => 'PowerPorts',
        'powerPortTemplates' => 'PowerPortTemplates',
        'rackGroups' => 'RackGroups',
        'rackReservations' => 'RackReservations',
        'rackRoles' => 'RackRoles',
        'racks' => 'Racks',
        'rearPortTemplates' => 'RearPortTemplates',
        'rearPorts' => 'RearPorts',
        'regions' => 'Regions',
        'sites' => 'Sites',
        'virtualChassis' => 'VirtualChassis',
        //ipam
        'ip' => 'Ip',
        /*'sites' => 'Sites',
        'racks' => 'Racks',
        'devices' => 'Devices',
        'prefixes' => 'Prefixes',

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
