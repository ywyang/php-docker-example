<?php
define('BASE_PATH', realpath(__DIR__ . '/../'));
define('APPLICATION_PATH', BASE_PATH . '/application');
define('LIBRARY_PATH', APPLICATION_PATH . '/library');
define("PUBLIC_PATH", __DIR__);

$application = new \Yaf\Application( BASE_PATH . "/conf/application.ini", 'develop'); //开发环境
$application->bootstrap()->run();
?>
