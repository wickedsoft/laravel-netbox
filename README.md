## Laravel NetBox
NetBox is an open source web application designed to help manage and document computer networks.

### Table of contents
- [Installation](INSTALL.md)
- [Usage](#usage)
- [Authentication](#authentication)
- [MultiInstalls](#multiinstalls)
- [Change log](CHANGELOG.md)
- [License](LICENSE.md)

### Usage
#### Global
```php
NetBox::status()->show(array $params)
```

#### Circuits
```php
NetBox::circuits()->list(array $params)
NetBox::circuits()->add(array $params)
NetBox::circuits()->remove(int $id, array $params)
NetBox::circuits()->edit(int $id, array $params)
NetBox::circuits()->show(int $id, array $params)
```

```php
NetBox::providers()->list(array $params)
NetBox::providers()->add(array $params)
NetBox::providers()->remove(int $id, array $params)
NetBox::providers()->edit(int $id, array $params)
NetBox::providers()->show(int $id, array $params)
```

```php
NetBox::circuitTerminations()->list(array $params)
NetBox::circuitTerminations()->add(array $params)
NetBox::circuitTerminations()->remove(int $id, array $params)
NetBox::circuitTerminations()->edit(int $id, array $params)
NetBox::circuitTerminations()->show(int $id, array $params)
```

```php
NetBox::circuitTypes()->list(array $params)
NetBox::circuitTypes()->add(array $params)
NetBox::circuitTypes()->remove(int $id, array $params)
NetBox::circuitTypes()->edit(int $id, array $params)
NetBox::circuitTypes()->show(int $id, array $params)
```

#### DCIM
```php
NetBox::cables()->list(array $params)
NetBox::cables()->add(array $params)
NetBox::cables()->remove(int $id, array $params)
NetBox::cables()->edit(int $id, array $params)
NetBox::cables()->show(int $id, array $params)
```

```php
NetBox::connectedDevices()->list(array $params)
```

```php
NetBox::consoleConnections()->list(array $params)
```

```php
NetBox::consolePorts()->list(array $params)
NetBox::consolePorts()->add(array $params)
NetBox::consolePorts()->remove(int $id, array $params)
NetBox::consolePorts()->edit(int $id, array $params)
NetBox::consolePorts()->show(int $id, array $params)
NetBox::consolePorts()->trace(int $id, array $params)
```

```php
NetBox::consolePortTemplates()->list(array $params)
NetBox::consolePortTemplates()->add(array $params)
NetBox::consolePortTemplates()->remove(int $id, array $params)
NetBox::consolePortTemplates()->edit(int $id, array $params)
NetBox::consolePortTemplates()->show(int $id, array $params)
```

```php
NetBox::consoleServerPorts()->list(array $params)
NetBox::consoleServerPorts()->add(array $params)
NetBox::consoleServerPorts()->remove(int $id, array $params)
NetBox::consoleServerPorts()->edit(int $id, array $params)
NetBox::consoleServerPorts()->show(int $id, array $params)
```

```php
NetBox::consoleServerPortTemplates()->list(array $params)
NetBox::consoleServerPortTemplates()->add(array $params)
NetBox::consoleServerPortTemplates()->remove(int $id, array $params)
NetBox::consoleServerPortTemplates()->edit(int $id, array $params)
NetBox::consoleServerPortTemplates()->show(int $id, array $params)
```

```php
NetBox::deviceBays()->list(array $params)
NetBox::deviceBays()->add(array $params)
NetBox::deviceBays()->remove(int $id, array $params)
NetBox::deviceBays()->edit(int $id, array $params)
NetBox::deviceBays()->show(int $id, array $params)
```

```php
NetBox::deviceBayTemplates()->list(array $params)
NetBox::deviceBayTemplates()->add(array $params)
NetBox::deviceBayTemplates()->remove(int $id, array $params)
NetBox::deviceBayTemplates()->edit(int $id, array $params)
NetBox::deviceBayTemplates()->show(int $id, array $params)
```

```php
NetBox::deviceRoles()->list(array $params)
NetBox::deviceRoles()->add(array $params)
NetBox::deviceRoles()->remove(int $id, array $params)
NetBox::deviceRoles()->edit(int $id, array $params)
NetBox::deviceRoles()->show(int $id, array $params)
```

```php
NetBox::devices()->list(array $params)
NetBox::devices()->add(array $params)
NetBox::devices()->remove(int $id, array $params)
NetBox::devices()->edit(int $id, array $params)
NetBox::devices()->show(int $id, array $params)
NetBox::devices()->napalm(int $id, array $params)
```

```php
NetBox::deviceTypes()->list(array $params)
NetBox::deviceTypes()->add(array $params)
NetBox::deviceTypes()->remove(int $id, array $params)
NetBox::deviceTypes()->edit(int $id, array $params)
NetBox::deviceTypes()->show(int $id, array $params)
```

```php
NetBox::frontPorts()->list(array $params)
NetBox::frontPorts()->add(array $params)
NetBox::frontPorts()->remove(int $id, array $params)
NetBox::frontPorts()->edit(int $id, array $params)
NetBox::frontPorts()->show(int $id, array $params)
NetBox::frontPorts()->paths(int $id, array $params)
```

```php
NetBox::frontPortTemplates()->list(array $params)
NetBox::frontPortTemplates()->add(array $params)
NetBox::frontPortTemplates()->remove(int $id, array $params)
NetBox::frontPortTemplates()->edit(int $id, array $params)
NetBox::frontPortTemplates()->show(int $id, array $params)
```

```php
NetBox::interfaceConnections()->list(array $params)
```

```php
NetBox::interfaces()->list(array $params)
NetBox::interfaces()->add(array $params)
NetBox::interfaces()->remove(int $id, array $params)
NetBox::interfaces()->edit(int $id, array $params)
NetBox::interfaces()->show(int $id, array $params)
NetBox::interfaces()->trace(int $id, array $params)
```

```php
NetBox::interfaceTemplates()->list(array $params)
NetBox::interfaceTemplates()->add(array $params)
NetBox::interfaceTemplates()->remove(int $id, array $params)
NetBox::interfaceTemplates()->edit(int $id, array $params)
NetBox::interfaceTemplates()->show(int $id, array $params)
```

```php
NetBox::inventoryItems()->list(array $params)
NetBox::inventoryItems()->add(array $params)
NetBox::inventoryItems()->remove(int $id, array $params)
NetBox::inventoryItems()->edit(int $id, array $params)
NetBox::inventoryItems()->show(int $id, array $params)
```

```php
NetBox::manufacturers()->list(array $params)
NetBox::manufacturers()->add(array $params)
NetBox::manufacturers()->remove(int $id, array $params)
NetBox::manufacturers()->edit(int $id, array $params)
NetBox::manufacturers()->show(int $id, array $params)
```

```php
NetBox::platforms()->list(array $params)
NetBox::platforms()->add(array $params)
NetBox::platforms()->remove(int $id, array $params)
NetBox::platforms()->edit(int $id, array $params)
NetBox::platforms()->show(int $id, array $params)
```

```php
NetBox::powerFeeds()->list(array $params)
NetBox::powerFeeds()->add(array $params)
NetBox::powerFeeds()->remove(int $id, array $params)
NetBox::powerFeeds()->edit(int $id, array $params)
NetBox::powerFeeds()->show(int $id, array $params)
NetBox::powerFeeds()->trace(int $id, array $params)
```

```php
NetBox::powerOutlets()->list(array $params)
NetBox::powerOutlets()->add(array $params)
NetBox::powerOutlets()->remove(int $id, array $params)
NetBox::powerOutlets()->edit(int $id, array $params)
NetBox::powerOutlets()->show(int $id, array $params)
NetBox::powerOutlets()->trace(int $id, array $params)
```

```php
NetBox::powerOutletTemplates()->list(array $params)
NetBox::powerOutletTemplates()->add(array $params)
NetBox::powerOutletTemplates()->remove(int $id, array $params)
NetBox::powerOutletTemplates()->edit(int $id, array $params)
NetBox::powerOutletTemplates()->show(int $id, array $params)
```

```php
NetBox::powerPanels()->list(array $params)
NetBox::powerPanels()->add(array $params)
NetBox::powerPanels()->remove(int $id, array $params)
NetBox::powerPanels()->edit(int $id, array $params)
NetBox::powerPanels()->show(int $id, array $params)
```

```php
NetBox::powerPorts()->list(array $params)
NetBox::powerPorts()->add(array $params)
NetBox::powerPorts()->remove(int $id, array $params)
NetBox::powerPorts()->edit(int $id, array $params)
NetBox::powerPorts()->show(int $id, array $params)
NetBox::powerPorts()->trace(int $id, array $params)
```

```php
NetBox::powerPortTemplates()->list(array $params)
NetBox::powerPortTemplates()->add(array $params)
NetBox::powerPortTemplates()->remove(int $id, array $params)
NetBox::powerPortTemplates()->edit(int $id, array $params)
NetBox::powerPortTemplates()->show(int $id, array $params)
```

```php
NetBox::rackGroups()->list(array $params)
NetBox::rackGroups()->add(array $params)
NetBox::rackGroups()->remove(int $id, array $params)
NetBox::rackGroups()->edit(int $id, array $params)
NetBox::rackGroups()->show(int $id, array $params)
```

```php
NetBox::rackReservations()->list(array $params)
NetBox::rackReservations()->add(array $params)
NetBox::rackReservations()->remove(int $id, array $params)
NetBox::rackReservations()->edit(int $id, array $params)
NetBox::rackReservations()->show(int $id, array $params)
```

```php
NetBox::rackRoles()->list(array $params)
NetBox::rackRoles()->add(array $params)
NetBox::rackRoles()->remove(int $id, array $params)
NetBox::rackRoles()->edit(int $id, array $params)
NetBox::rackRoles()->show(int $id, array $params)
```

```php
NetBox::racks()->list(array $params)
NetBox::racks()->add(array $params)
NetBox::racks()->remove(int $id, array $params)
NetBox::racks()->edit(int $id, array $params)
NetBox::racks()->show(int $id, array $params)
NetBox::racks()->elevation(int $id, array $params)
```

```php
NetBox::rearPorts()->list(array $params)
NetBox::rearPorts()->add(array $params)
NetBox::rearPorts()->remove(int $id, array $params)
NetBox::rearPorts()->edit(int $id, array $params)
NetBox::rearPorts()->show(int $id, array $params)
NetBox::rearPorts()->paths(int $id, array $params)
```

```php
NetBox::rearPortTemplates()->list(array $params)
NetBox::rearPortTemplates()->add(array $params)
NetBox::rearPortTemplates()->remove(int $id, array $params)
NetBox::rearPortTemplates()->edit(int $id, array $params)
NetBox::rearPortTemplates()->show(int $id, array $params)
```

```php
NetBox::regions()->list(array $params)
NetBox::regions()->add(array $params)
NetBox::regions()->remove(int $id, array $params)
NetBox::regions()->edit(int $id, array $params)
NetBox::regions()->show(int $id, array $params)
```

```php
NetBox::sites()->list(array $params)
NetBox::sites()->add(array $params)
NetBox::sites()->remove(int $id, array $params)
NetBox::sites()->edit(int $id, array $params)
NetBox::sites()->show(int $id, array $params)
```

```php
NetBox::virtualChassis()->list(array $params)
NetBox::virtualChassis()->add(array $params)
NetBox::virtualChassis()->remove(int $id, array $params)
NetBox::virtualChassis()->edit(int $id, array $params)
NetBox::virtualChassis()->show(int $id, array $params)
```

#### Extras
```php
NetBox::configContexts()->list(array $params)
NetBox::configContexts()->add(array $params)
NetBox::configContexts()->remove(int $id, array $params)
NetBox::configContexts()->edit(int $id, array $params)
NetBox::configContexts()->show(int $id, array $params)
```

```php
NetBox::contentTypes()->list(array $params)
NetBox::contentTypes()->show(int $id, array $params)
```

```php
NetBox::customFields()->list(array $params)
NetBox::customFields()->add(array $params)
NetBox::customFields()->remove(int $id, array $params)
NetBox::customFields()->edit(int $id, array $params)
NetBox::customFields()->show(int $id, array $params)
```

```php
NetBox::exportTemplates()->list(array $params)
NetBox::exportTemplates()->add(array $params)
NetBox::exportTemplates()->remove(int $id, array $params)
NetBox::exportTemplates()->edit(int $id, array $params)
NetBox::exportTemplates()->show(int $id, array $params)
```

```php
NetBox::imageAttachments()->list(array $params)
NetBox::imageAttachments()->add(array $params)
NetBox::imageAttachments()->remove(int $id, array $params)
NetBox::imageAttachments()->edit(int $id, array $params)
NetBox::imageAttachments()->show(int $id, array $params)
```

```php
NetBox::jobResults()->list(array $params)
NetBox::jobResults()->show(int $id, array $params)
```

```php
NetBox::objectChanges()->list(array $params)
NetBox::objectChanges()->show(int $id, array $params)
```

```php
NetBox::reports()->list(array $params)
NetBox::reports()->show(int $id, array $params)
NetBox::reports()->run(int $id, array $params)
```

```php
NetBox::scripts()->list(array $params)
NetBox::scripts()->show(int $id, array $params)
```

```php
NetBox::tags()->list(array $params)
NetBox::tags()->add(array $params)
NetBox::tags()->remove(int $id, array $params)
NetBox::tags()->edit(int $id, array $params)
NetBox::tags()->show(int $id, array $params)
```

#### IPAM
```php
NetBox::aggregates()->list(array $params)
NetBox::aggregates()->add(array $params)
NetBox::aggregates()->remove(int $id, array $params)
NetBox::aggregates()->edit(int $id, array $params)
NetBox::aggregates()->show(int $id, array $params)
```

```php
NetBox::ipAddresses()->list(array $params)
NetBox::ipAddresses()->add(array $params)
NetBox::ipAddresses()->remove(int $id, array $params)
NetBox::ipAddresses()->edit(int $id, array $params)
NetBox::ipAddresses()->show(int $id, array $params)
```

```php
NetBox::prefixes()->list(array $params)
NetBox::prefixes()->add(array $params)
NetBox::prefixes()->remove(int $id, array $params)
NetBox::prefixes()->edit(int $id, array $params)
NetBox::prefixes()->show(int $id, array $params)
NetBox::prefixes()->addAvailableIps(int $id, array $params)
NetBox::prefixes()->showAvailableIps(int $id, array $params)
NetBox::prefixes()->addAvailable(int $id, array $params)
NetBox::prefixes()->showAvailable(int $id, array $params)
```

```php
NetBox::rirs()->list(array $params)
NetBox::rirs()->add(array $params)
NetBox::rirs()->remove(int $id, array $params)
NetBox::rirs()->edit(int $id, array $params)
NetBox::rirs()->show(int $id, array $params)
```

```php
NetBox::roles()->list(array $params)
NetBox::roles()->add(array $params)
NetBox::roles()->remove(int $id, array $params)
NetBox::roles()->edit(int $id, array $params)
NetBox::roles()->show(int $id, array $params)
```

```php
NetBox::routeTargets()->list(array $params)
NetBox::routeTargets()->add(array $params)
NetBox::routeTargets()->remove(int $id, array $params)
NetBox::routeTargets()->edit(int $id, array $params)
NetBox::routeTargets()->show(int $id, array $params)
```

```php
NetBox::services()->list(array $params)
NetBox::services()->add(array $params)
NetBox::services()->remove(int $id, array $params)
NetBox::services()->edit(int $id, array $params)
NetBox::services()->show(int $id, array $params)
```

```php
NetBox::vlanGroups()->list(array $params)
NetBox::vlanGroups()->add(array $params)
NetBox::vlanGroups()->remove(int $id, array $params)
NetBox::vlanGroups()->edit(int $id, array $params)
NetBox::vlanGroups()->show(int $id, array $params)
```

```php
NetBox::vlans()->list(array $params)
NetBox::vlans()->add(array $params)
NetBox::vlans()->remove(int $id, array $params)
NetBox::vlans()->edit(int $id, array $params)
NetBox::vlans()->show(int $id, array $params)
```

```php
NetBox::vrfs()->list(array $params)
NetBox::vrfs()->add(array $params)
NetBox::vrfs()->remove(int $id, array $params)
NetBox::vrfs()->edit(int $id, array $params)
NetBox::vrfs()->show(int $id, array $params)
```

#### Secrets
```php
NetBox::keyGen()->list(array $params)
```

```php
NetBox::secrets()->list(array $params)
NetBox::secrets()->add(array $params)
NetBox::secrets()->remove(int $id, array $params)
NetBox::secrets()->edit(int $id, array $params)
NetBox::secrets()->show(int $id, array $params)
```

```php
NetBox::secretRoles()->list(array $params)
NetBox::secretRoles()->add(array $params)
NetBox::secretRoles()->remove(int $id, array $params)
NetBox::secretRoles()->edit(int $id, array $params)
NetBox::secretRoles()->show(int $id, array $params)
```

```php
NetBox::session()->list(array $params)
```

#### Tenancy
```php
NetBox::tenantGroups()->list(array $params)
NetBox::tenantGroups()->add(array $params)
NetBox::tenantGroups()->remove(int $id, array $params)
NetBox::tenantGroups()->edit(int $id, array $params)
NetBox::tenantGroups()->show(int $id, array $params)
```

```php
NetBox::tenants()->list(array $params)
NetBox::tenants()->add(array $params)
NetBox::tenants()->remove(int $id, array $params)
NetBox::tenants()->edit(int $id, array $params)
NetBox::tenants()->show(int $id, array $params)
```

#### Users
```php
NetBox::config()->list(array $params)
```

```php
NetBox::groups()->list(array $params)
NetBox::groups()->add(array $params)
NetBox::groups()->remove(int $id, array $params)
NetBox::groups()->edit(int $id, array $params)
NetBox::groups()->show(int $id, array $params)
```

```php
NetBox::permissions()->list(array $params)
NetBox::permissions()->add(array $params)
NetBox::permissions()->remove(int $id, array $params)
NetBox::permissions()->edit(int $id, array $params)
NetBox::permissions()->show(int $id, array $params)
```

```php
NetBox::users()->list(array $params)
NetBox::users()->add(array $params)
NetBox::users()->remove(int $id, array $params)
NetBox::users()->edit(int $id, array $params)
NetBox::users()->show(int $id, array $params)
```

#### Virtualization
```php
NetBox::clusterGroups()->list(array $params)
NetBox::clusterGroups()->add(array $params)
NetBox::clusterGroups()->remove(int $id, array $params)
NetBox::clusterGroups()->edit(int $id, array $params)
NetBox::clusterGroups()->show(int $id, array $params)
```

```php
NetBox::clusters()->list(array $params)
NetBox::clusters()->add(array $params)
NetBox::clusters()->remove(int $id, array $params)
NetBox::clusters()->edit(int $id, array $params)
NetBox::clusters()->show(int $id, array $params)
```

```php
NetBox::clusterTypes()->list(array $params)
NetBox::clusterTypes()->add(array $params)
NetBox::clusterTypes()->remove(int $id, array $params)
NetBox::clusterTypes()->edit(int $id, array $params)
NetBox::clusterTypes()->show(int $id, array $params)
```

```php
NetBox::vinterfaces()->list(array $params)
NetBox::vinterfaces()->add(array $params)
NetBox::vinterfaces()->remove(int $id, array $params)
NetBox::vinterfaces()->edit(int $id, array $params)
NetBox::vinterfaces()->show(int $id, array $params)
```

```php
NetBox::virtualMachines()->list(array $params)
NetBox::virtualMachines()->add(array $params)
NetBox::virtualMachines()->remove(int $id, array $params)
NetBox::virtualMachines()->edit(int $id, array $params)
NetBox::virtualMachines()->show(int $id, array $params)
```

### Authentication
It's possible to use a custom `netbox` authentication driver to login users in your application.
*** CURRENTLY AUTHENTICATION DOES NOT WORK CORRECTLY ***
#### Setup
```php
// config/auth.php
'providers' => [
    'netbox' => [
        'driver' => 'netbox'
    ],
]

// Auth::attempt
if(Auth::attempt(['username' => $username, 'password' => $password]))
{
    dd(Auth::user(), Auth::id());
}
```
#### Caching
By default the UserProfile will be cached for 60 minutes, you can use the command below to clear it, it will refresh the next time it is needed.
```php
cache()->forget('netbox_user_id_' .$user_id);
```

### MultiInstalls
#### Configuration
If you want to work with more Netbox installs, you can define more instances in the `config/netbox.php` file
```php
// config/netbox.php
'sites' => [

    'default' => [
        'url' => env('NETBOX_DEFAULT_URL'),
        'key' => env('NETBOX_DEFAULT_KEY'),
    ],

    'chicago' => [
        'url' => env('NETBOX_CHI_URL'),
        'key' => env('NETBOX_CHI_KEY'),
    ],

],
```
#### Default site
If you have multiple Netbox sites, you can add this to your environment file (.env), in order to pick a different default site than the default.
```
NETBOX_CONNECTION=
```

#### Access
To use another netbox than your default one, you can specify it with the site method
```php
// UsersController
public function getIndex()
{
    $users = NetBox::site('chicago')->users()->list([
        'limit' => 20
    ]);

    //
}
```

#### Dependency injection
```php
// Route
Route::get('/netbox/{netBox}/users', ['as' => 'netbox/users', 'uses' => 'UsersController@getIndex']);

Route::bind('netBox', function ($value, $route) {
    app('NetBox')->site($value);

    return app('NetBox');
});

// UsersController
public function getIndex(NetBox $netBox)
{
    $users = $netBox->users()->list([
        'limit' => 20
    ]);

    //
}
```
- - -
