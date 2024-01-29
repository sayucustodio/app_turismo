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

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
//     'firebase' => [
// 'apiKey'=> env('FIREBASE_API_KEY'),
// 'authDomain' => env('FIREBASE_AUTH_DOMAIN'),
// 'projectId' => env('FIREBASE_PROJECT_ID'),
// 'storageBucket' => env('FIREBASE_STORAGE_BUCKET'),
// 'messagingSenderId' => env('FIREBASE_MESSAGING_SENDER_ID'),
// 'appId' => env('FIREBASE_APP_ID'),
//     ],


//  'firebase' => [
//      'credential' => [
//          'type' => env('FIREBASE_TYPE'),
//          'project_id' => env('FIREBASE_PROJECT_ID'),
//          'private_key_id' => env('FIREBASE_PRIVATE_KEY_ID'),
//          'private_key' => env('FIREBASE_PRIVATE_KEY'),
//          'client_email' => env('FIREBASE_CLIENT_EMAIL'),
//          'client_id' => env('FIREBASE_CLIENT_ID'),
//          'auth_uri' => env('FIREBASE_AUTH_URI'),
//          'token_uri' => env('FIREBASE_TOKEN_URI'),
//          'auth_provider_x509_cert_url' => env('FIREBASE_AUTH_PROVIDER_X509_CERT_URL'),
//          'client_x509_cert_url' => env('FIREBASE_CLIENT_X509_CERT_URL'),
//         'universe_domain' => env('FIREBASE_UNIVERSE_DOMAIN'),
//      ],
//  ],


// 'firebase' => [
//     'credentials' => env('FIREBASE_CREDENTIALS_PATH', storage_path('app/firebase.json')),
//     'database_url' => env('FIREBASE_DATABASE_URL', 'https://your-firebase-database-url.firebaseio.com'),
// ],

   

];
