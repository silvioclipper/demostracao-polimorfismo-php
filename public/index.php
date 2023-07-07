<?php

require_once '../vendor/autoload.php';

use app\lib\Client;
use app\lib\Shop;

$client = new Client;
$shop = new Shop;

$shop->addCarShop('array');
