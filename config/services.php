<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
    'domain' => 'sandbox353074c7e1a54c6e97c8913f5aa46fa9.mailgun.org',
    'secret' => 'ea8091d8a1138e511ba1bec59239f0eb',
    ],

    'mandrill' => [
    'secret' => env('MANDRILL_SECRET'),
    ],

    'ses' => [
    'key'    => env('SES_KEY'),
    'secret' => env('SES_SECRET'),
    'region' => 'us-east-1',
    ],

    'stripe' => [
    'model'  => App\User::class,
    'key'    => env('STRIPE_KEY'),
    'secret' => env('STRIPE_SECRET'),
    ],

	'twitter' => [
    'client_id' => 'vvwIseC6HcfvUqGz5sx2KCTV7',
    'client_secret' => 'PjSY6zsXQdD0aLb4JLyeCwdHWUTbeEjIHWf558SyK2pFebUPxg',
    'redirect' => 'http://localhost:8000/public/callback',
    ],
	
    'facebook' => [
    'client_id' => '1700935300171729',
    'client_secret' => 'XXXXXXXXXXXXXXXXXXX',
    'redirect' => url('/facebook/callback'),
    ],


    'google' => [
    'client_id'     => 'XXXXXXXXXXXXXXXXXXXXXXXX',
    'client_secret' => 'XXXXXXXXXXXXXXXXXXXXXXXX',
    'redirect'      => url('google/callback'),
    ],


    ];