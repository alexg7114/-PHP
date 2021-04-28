<?php

interface IPaymentStrategy
{
    public function pay($amount, $telephoneNumber);
}

class QiwiPayment implements IPaymentStrategy 
{
    public function pay($amount, $telephoneNumber)
    {
        echo "Paying ". $telephoneNumber. "amount ". $amount. " using Qiwi";
    }    
}

class YandexPayment implements IPaymentsStrategy
{
    public function pay($amount, $telephoneNumber)
    {
        echo "Paying ". $telephoneNumber. "amount ". $amount. " using Yandex";
    }    
}

class WebMoneyPayment implements IPaymentsStrategy
{
    public function pay($amount, $telephoneNumber)
    {
        echo "Paying ". $telephoneNumber. "amount ". $amount. " using WebMoney";
    }    
}

class ShoppingCart
{
    public $amount = 0;
    public $telephoneNumber = 0;
    public $paymentsMethod = '';

    public function getTelephoneNumber()
    {
        return $this->telephoneNumber = $telephoneNumber;
    }

    public function getPaymentsMethod()
    {
        return $this->paymentsMethod = $paymentsMethod;
    }

    public function __construct($amount = 0)
    {
        $this->amount = $amount;
    }
    
    public function getAmount($amount = 0)
    {
        return $this->amount;
    }
    
    public function setAmount($amount = 0)
    {
        $this->amount = $amount;
    }

    public function payAmount()
    {
        if($this->paymentsMethod == Qiwi)
        {
            $payment = new QiwiPayment();
        } elseif ($this->paymentsMethod == Yandex) 
        {
            $payment = new YandexPayment();
        } elseif ($this->paymentsMethod == WebMoney) 
        {
            $payment = new WebMoneyPayment();
        }

        $payment->pay($this->amount);
    }

}

$buySocksCart = new ShoppingCart();
$buySocksCart ->payAmount();