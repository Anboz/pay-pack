<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 10.05.2021
 * Time: 15:23
 */

namespace AlifPay\Facades;


use AlifPay\AlifPayClient;
use Illuminate\Support\Facades\Facade;

class AlifPayFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return AlifPayClient::class;
    }


}