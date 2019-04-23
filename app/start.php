<?php

use Aws\S3\S3Client;
use Aws\CloudFront\CloudFrontClient;

require 'vendor/autoload.php';

$config = require('config.php');

//S3
$s3 = S3Client::factory([
    'key' => $config['s3']['key'],
    'secret' => $config['s3']['secret']
]);

// Cloudfront
$cloudfront = CloudFrontClient::factory([
    'private_key' => $config['cloudfront']['private_key'],
    'key_pair_id' => $config['cloudfront']['key_pair_id']
]);
