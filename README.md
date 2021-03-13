## Laravel NetBox

NetBox is an open source web application designed to help manage and document computer networks.
### Table of contents
- [Installation](#installation)
- [Usage](#usage)
- [Tests](#tests)
### Installation
Install this package with composer:
```
composer require wickedsoft/laravel-netbox
```
Copy the config files for the HostFact-plugin
```
php artisan vendor:publish --provider="wickedsoft\NetBox\ServiceProvider" --tag="config"
```
Add the HostFact credentials to your `.env` file
```
NETBOX_DEFAULT_URL=
NETBOX_DEFAULT_KEY=
```
### Usage
#### Authentication [users]
It's possible to use a custom `netbox` authentication driver to login users in your application, by default the UserProfile will be cached for 60 minutes
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
#### Multiple Installs [config]
If you want to work with more Netbox installs, you can define more netboxes in the `config/netbox.php` file
```php
// config/netbox.php
'panels' => [

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
#### Multiple Installs [normal usage]
To use another netbox than your default one, you can specify it with the panel-method
```php
// UsersController
public function getIndex()
{
    $users = NetBox::panel('chicago')->users()->list([
        'limit' => 20
    ]);

    //
}
```
#### Multiple Installs [dependency injection]
```php
// Route
Route::get('/netbox/{netBox}/users', ['as' => 'netbox/users', 'uses' => 'UsersController@getIndex']);

Route::bind('netBox', function ($value, $route) {
    app('NetBox')->panel($value);

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

- - - 

