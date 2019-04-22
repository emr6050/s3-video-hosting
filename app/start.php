<?php

use Aws\S3\S3Client;
use Aws\CloudFront\CloudFrontClient

require 'vendor/autoload.php'

$config = require('config.php');

//S3
$s3 = S3Client::factory([
    'key' => $config['s3']['key'],
    'secret' => $config['s3']['secret']
]);

// Cloudfront
$cloudfront = CloudFrontClient::factory([
    'private_key' => '',    // path to private key
    'key_pair_id' => ''     // from aws console
]);
