# Installation

## Information
The install of this package is pretty straight forward

## Install Steps
### Install
Install this package with composer:
```
composer require wickedsoft/laravel-netbox
```

### Publish configuration
Copy the config files for laravel-netbox
```
php artisan vendor:publish --provider="wickedsoft\NetBox\ServiceProvider" --tag="config"
```

### Environment file
Add the credentials to your environment file (.env)
```
NETBOX_DEFAULT_URL=
NETBOX_DEFAULT_KEY=
```

### MultiInstalls
If you have multiple Netbox sites, you can add this to your environment file (.env), in order to pick a different default site than the default.
```
NETBOX_CONNECTION=
```
