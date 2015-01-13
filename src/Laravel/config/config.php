<?php

return [
    /*
    |--------------------------------------------------------------------------
    | GeoIP Driver Type
    |--------------------------------------------------------------------------
    |
    | Supported: "ip-api", "telize", "maxmind"
    |
    */
    'driver' => 'ip-api',

    /*
    |--------------------------------------------------------------------------
    | IP-API Driver
    |--------------------------------------------------------------------------
    */
    'ip-api' => [
        /*
        |--------------------------------------------------------------------------
        | IP-API Pro Service Key
        |--------------------------------------------------------------------------
        */
        'key' => '',

        /*
        |--------------------------------------------------------------------------
        | IP-API Secure connection
        |--------------------------------------------------------------------------
        |
        | Use http or https
        | Only applicable with the Pro service
        |
        */
        'secure' => false,
    ],

    /*
    |--------------------------------------------------------------------------
    | Telize Driver
    |--------------------------------------------------------------------------
    */
    'telize' => [
        /*
        |--------------------------------------------------------------------------
        | Telize Secure connection
        |--------------------------------------------------------------------------
        |
        | Use http or https
        |
        */
        'secure' => false,
    ],

    /*
    |--------------------------------------------------------------------------
    | Maxmind Driver
    |--------------------------------------------------------------------------
    */
    'maxmind' => [
        /*
        |--------------------------------------------------------------------------
        | Maxmind Database
        |--------------------------------------------------------------------------
        |
        | Example: app_path().'/database/maxmind/GeoLite2-City.mmdb'
        |
        */
        'database' => '',

        /*
        |--------------------------------------------------------------------------
        | Maxmind Web Service Info
        |--------------------------------------------------------------------------
        */
        'user_id' => '',
        'license_key' => '',
    ],
];
