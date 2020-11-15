<?php
require_once __DIR__ . '/../vendor/autoload.php';
include __DIR__ . '/../config/config.php';

use Aws\S3\S3Client;

$s3 = new S3Client([
    'version' => 'latest',
    'region'  => 'us-east-1',
    'credentials' => [
        'key' => AWS_KEY,
        'secret' => AWS_SECRET
    ]
]);

$db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$db->query("SET NAMES 'utf8'");

session_start();
?>