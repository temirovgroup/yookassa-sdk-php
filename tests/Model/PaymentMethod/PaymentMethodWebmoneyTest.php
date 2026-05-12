<?php

namespace Tests\YooKassa\Model\PaymentMethod;

use temirovgroup\Model\PaymentMethod\PaymentMethodWebmoney;
use temirovgroup\Model\PaymentMethodType;

class PaymentMethodWebmoneyTest extends AbstractPaymentMethodTest
{
    /**
     * @return PaymentMethodWebmoney
     */
    protected function getTestInstance()
    {
        return new PaymentMethodWebmoney();
    }

    /**
     * @return string
     */
    protected function getExpectedType()
    {
        return PaymentMethodType::WEBMONEY;
    }
}
