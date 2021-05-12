<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 10.05.2021
 * Time: 15:34
 */

namespace AlifPay;


class AlifPay
{
    private string $secretkey;
    public string $key;
    public float $amount;
    public string $info;
    public int $orderId;
    public string $callbackUrl;
    public string $returnUrl;
    public strig $email;
    public string $phone;
    public string $status;
    public int $transactionId;

    public function __construct($key, $pass, $returnUrl, $callbackUrl)
    {
        $this->key = $key;
        $this->returnUrl = $returnUrl;
        $this->callbackUrl = $callbackUrl;
        $this->secretkey = hash_hmac('sha256', $pass, $key);
    }

    public function token(){
        $this->amount = number_format($this->amount, 2, '.', '');
        if($this->amount > 0 && $this->key !== '' && $this->orderId > 0 && $this->callbackUrl !== ''){
            return hash_hmac('sha256', $this->key.$this->orderId . $this->amount . $this->callbackUrl, $this->secretkey);
        }
    }

    public function callback(){
        return hash_hmac('sha256', $this->orderId . $this->status . $this->transactionId, $this->secretkey);
    }

    public function checkOrderToken(){
        return hash_hmac('sha256', $this->key.$this->orderId, $this->secretkey);
    }

    public function tokenInfo($jsn){
        return hash_hmac('sha256', $jsn, $this->secretkey);
    }
}