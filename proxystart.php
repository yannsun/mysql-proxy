<?php
define('ROOT_PATH', __DIR__ . DIRECTORY_SEPARATOR);
require ROOT_PATH . '/Vendor/Autoloader.php';
\Vendor\Autoloader::instance()->addRoot(ROOT_PATH)->addRoot(ROOT_PATH . '/Vendor/')->init();

$core = new \Core\MysqlProxy();
$core->init();
$core->start();
