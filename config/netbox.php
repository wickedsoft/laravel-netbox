<?php

return [

    'default' => env('NETBOX_CONNECTION', 'default'),

    'panels' => [
        'default' => [
            'url' => env('NETBOX_DEFAULT_URL'),
            'key' => env('NETBOX_DEFAULT_KEY'),
        ],
    ],

    'client_options' => [
        'base_uri' => env('NETBOX_DEFAULT_URL'),
        \GuzzleHttp\RequestOptions::COOKIES => true,
        \GuzzleHttp\RequestOptions::CONNECT_TIMEOUT => 10,
        \GuzzleHttp\RequestOptions::TIMEOUT => 10,
        \GuzzleHttp\RequestOptions::ALLOW_REDIRECTS => false,
        'headers' => [
                'Authorization' => "Token ".env('NETBOX_DEFAULT_KEY'),
        ],
    ],

];
