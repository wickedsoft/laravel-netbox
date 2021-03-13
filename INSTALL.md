# Installation

## Information
The install of this package is pretty straight forward

## Install Steps
### Install this package with composer:
```
composer require wickedsoft/laravel-netbox
```

### Copy the config files for laravel-netbox
```
php artisan vendor:publish --provider="wickedsoft\NetBox\ServiceProvider" --tag="config"
```

### Add the credentials to your environment file (.env)
```
NETBOX_DEFAULT_URL=
NETBOX_DEFAULT_KEY=
```
