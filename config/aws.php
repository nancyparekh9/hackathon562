<?php

use Aws\Laravel\AwsServiceProvider;

return [

    /*
    |--------------------------------------------------------------------------
    | AWS SDK Configuration
    |--------------------------------------------------------------------------
    |
    | The configuration options set in this file will be passed directly to the
    | `Aws\Sdk` object, from which all client objects are created. The minimum
    | required options are declared here, but the full set of possible options
    | are documented at:
    | http://docs.aws.amazon.com/aws-sdk-php/v3/guide/guide/configuration.html
    |
    */

    'credentials' => [
        'key'    => 'AKIAIYFBANZFPICFPLBQ',
        'secret' => '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',
    ],
    'region' => 'ap-south-1',
    'version' => 'latest',
];
