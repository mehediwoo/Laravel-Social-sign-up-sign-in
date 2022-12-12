<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'linkedin' => [
        'client_id' => '86fsb7lljuts0g',
        'client_secret' => '7hSH4txjp61qdfAF',
        'redirect' => 'http://127.0.0.1:8000/linkedinCallBack',
    ],
    'facebook' => [
        'client_id' => '829345511511414',
        'client_secret' => 'e1c20c6a09133a7b1d25b70241a451a4',
        'redirect' => 'http://127.0.0.1:8000/facebookCallBack',
    ],
    'github' => [
        'client_id' => 'bbb45082bce2956bcc94',
        'client_secret' => 'f78d874fb28c490067c6ac49e5e33b769eb874c0',
        'redirect' => 'http://127.0.0.1:8000/githubCallBack',
    ],
    'google' => [
        'client_id' => '946844590855-3i5r3au18kjoprd85h8ucc8k3837ltb0.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'http://127.0.0.1:8000/googleCallBack',
    ],

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],


];
