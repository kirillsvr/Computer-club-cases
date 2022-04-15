<?php

define("DEBUG", 1);
define("ROOT", dirname(__DIR__));
define("WWW", ROOT . '/public');
define("APP", ROOT . '/app');
define("CORE", ROOT . '/vendor/senet/core');
define("LIBS", ROOT . '/vendor/senet/core/libs');
define("CACHE", ROOT . '/tmp/cache');
define("CONF", ROOT . '/config');
define("LAYOUT", 'senet');

const DB_DSN = '';
const DB_USER = '';
const DB_PASS = '';

const FIRST_CASE_PRICE = 350;
const SECOND_CASE_PRICE = 450;
const THIRD_CASE_PRICE = 550;
const CLIENT_ID = ''; // CLIENT_ID from SENET
const GRANT_TYPE = ''; // GRAND_TYPE from SENET
const PASSWORD = ""; // Password from your SENET-profile
const USERNAME = ""; // Username from your SENET-profile
const LIMIT_PRIZE_FOR_DAY = 200;

const DOMIAN = '';

const TELEGRAM_TOKEN = '';
const TELEGRAM_CHAT_ID = '';

$app_path = "http://{$_SERVER['HTTP_HOST']}{$_SERVER['PHP_SELF']}";

$app_path = preg_replace("#[^/]+$#", "", $app_path);

$app_path = str_replace('/public/', '', $app_path);

define('PATH', $app_path);
define('ADMIN', PATH . '/admin');

require_once ROOT . '/vendor/autoload.php';