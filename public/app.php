<?php

use Lottery\Infrastructure\Api\LotteryController;

require_once __DIR__ . '/../vendor/autoload.php';


header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET');

$controller = new LotteryController();
$controller->generate();
