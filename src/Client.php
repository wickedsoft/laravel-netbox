<?php

namespace wickedsoft\NetBox;

use wickedsoft\NetBox\HttpClient\HttpClient;

class Client
{
    /** @var array */
    protected $classes = [
        //Circuits
        'circuits' => 'Circuits\Circuits',
        'providers' => 'Circuits\Providers',
        'circuitTerminations' => 'Circuits\CircuitTerminations',
        'circuitTypes' => 'Circuits\CircuitTypes',

        //dcim
        'cables' => 'DCMI\Cables',
        'connectedDevices' => 'DCMI\ConnectedDevices',
        'consoleConnections' => 'DCMI\ConsoleConnections',
        'consolePorts' => 'DCMI\ConsolePorts',
        'consolePortTemplates' => 'DCMI\ConsolePortTemplates',
        'consoleServerPorts' => 'DCMI\ConsoleServerPorts',
        'consoleServerPortTemplates' => 'DCMI\ConsoleServerPortTemplates',
        'deviceBays' => 'DCMI\DeviceBays',
        'deviceBayTemplates' => 'DCMI\DeviceBayTemplates',
        'deviceRoles' => 'DCMI\DeviceRoles',
        'devices' => 'DCMI\Devices',
        'deviceTypes' => 'DCMI\DeviceTypes',
        'frontPorts' => 'DCMI\FrontPorts',
        'frontPortTemplates' => 'DCMI\FrontPortTemplates',
        'interfaceConnections' => 'DCMI\InterfaceConnections',
        'interfaces' => 'DCMI\Interfaces',
        'interfaceTemplates' => 'DCMI\InterfaceTemplates',
        'inventoryItems' => 'DCMI\InventoryItems',
        'manufacturers' => 'DCMI\Manufacturers',
        'platforms' => 'DCMI\Platforms',
        'powerFeeds' => 'DCMI\PowerFeeds',
        'powerOutlets' => 'DCMI\PowerOutlets',
        'powerOutletTemplates' => 'DCMI\PowerOutletTemplates',
        'powerPanels' => 'DCMI\PowerPanels',
        'powerPorts' => 'DCMI\PowerPorts',
        'powerPortTemplates' => 'DCMI\PowerPortTemplates',
        'rackGroups' => 'DCMI\RackGroups',
        'rackReservations' => 'DCMI\RackReservations',
        'rackRoles' => 'DCMI\RackRoles',
        'racks' => 'DCMI\Racks',
        'rearPorts' => 'DCMI\RearPorts',
        'rearPortTemplates' => 'DCMI\RearPortTemplates',
        'regions' => 'DCMI\Regions',
        'sites' => 'DCMI\Sites',
        'virtualChassis' => 'DCMI\VirtualChassis',

        //extras
        'configContexts' => 'Extras\ConfigContexts',
        'contentTypes' => 'Extras\ContentTypes',
        'customFields' => 'Extras\CustomFields',
        'exportTemplates' => 'Extras\ExportTemplates',
        'imageAttachments' => 'Extras\ImageAttachments',
        'jobResults' => 'Extras\JobResults',
        'objectChanges' => 'Extras\ObjectChanges',
        'reports' => 'Extras\Reports',
        'scripts' => 'Extras\Scripts',
        'tags' => 'Extras\Tags',

        //ipam
        'aggregates' => 'IPAM\Aggregates',
        'ipAddresses' => 'IPAM\IpAddresses',
        'prefixes' => 'IPAM\Prefixes',
        'rirs' => 'IPAM\Rirs',
        'roles' => 'IPAM\Roles',
        'routeTargets' => 'IPAM\RouteTargets',
        'services' => 'IPAM\Services',
        'vlanGroups' => 'IPAM\VlanGroups',
        'vlans' => 'IPAM\Vlans',
        'vrfs' => 'IPAM\Vrfs',

        //secrets
        'keyGen' => 'Secrets\KeyGen',
        'secrets' => 'Secrets\Secrets',
        'secretRoles' => 'Secrets\SecretRoles',
        'session' => 'Secrets\Session',

        //Tenancy
        'tenantGroups' => 'Tenancy\TenantGroups',
        'tenants' => 'Tenancy\Tenants',

        //users
        'config' => 'Users\Config',
        'groups' => 'Users\Groups',
        'permissions' => 'Users\Permissions',
        'users' => 'Users\Users',

        //Virtualization
        'clusterGroups' => 'Virtualization\ClusterGroups',
        'clusters' => 'Virtualization\Clusters',
        'clusterTypes' => 'Virtualization\ClusterTypes',
        'vinterfaces' => 'Virtualization\Interfaces',
        'virtualMachines' => 'Virtualization\VirtualMachines',

        'status' => 'Status',

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
