<?php

use Aws\S3\S3Client;

require 'vendor/autoload.php';

$config = require('config.php');
//s3 instance
$s3 = S3Client::factory([
    'key' => '',
    'secret' => '',
    'region' => 'ap-northeast-1'
]);