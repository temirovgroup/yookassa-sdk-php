<?php


namespace Tests\YooKassa\Model\PaymentMethod;


use temirovgroup\Model\PaymentMethod\AbstractPaymentMethod;
use temirovgroup\Model\PaymentMethod\PaymentMethodTinkoffBank;
use temirovgroup\Model\PaymentMethodType;

class PaymentMethodTinkoffBankTest extends AbstractPaymentMethodTest
{

    /**
     * @return AbstractPaymentMethod
     */
    protected function getTestInstance()
    {
        return new PaymentMethodTinkoffBank();
    }

    /**
     * @return string
     */
    protected function getExpectedType()
    {
        return PaymentMethodType::TINKOFF_BANK;
    }
}
