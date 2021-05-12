<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 10.05.2021
 * Time: 20:46
 */

require __DIR__."/../vendor/autoload.php";

$client = (new \AlifPay\AlifPayClient())->getAlifPay();

print_r($client);