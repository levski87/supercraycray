<?php
/**
 * This is a sample config settings file.
 * For development on your local machine you should create a file .env.local.php and fill in these values.
 */


$_ENV['DB_NAME'] = 'supercraycray';
$_ENV['DB_USER'] = 'root';
$_ENV['DB_PASSWORD'] = 'kirill';
$_ENV['DB_HOST'] = 'localhost';
$_ENV['AWS_ACCESS_KEY_ID'] = '';
$_ENV['AWS_SECRET_KEY'] = '';
$_ENV['CDN_URL_REPLACE'] = array(
    'http://local.supercraycray.com/wp-content/uploads' => 'http://testing.supercraycray.com/wp-content/uploads'
);
$_ENV['MEMCACHED_SERVERS'] = array(
    '127.0.0.1:11211',
);