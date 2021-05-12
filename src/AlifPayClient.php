<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 10.05.2021
 * Time: 15:24
 */

namespace AlifPay;


class AlifPayClient
{

    public function getAlifPay()
    {
        return new AlifPay(...config('alif-pay'));
    }

}