<?php

namespace Tests\YooKassa\Model\PaymentMethod;

use temirovgroup\Model\PaymentMethod\PaymentMethodCash;
use temirovgroup\Model\PaymentMethodType;

class PaymentMethodCashTest extends AbstractPaymentMethodTest
{
    /**
     * @return PaymentMethodCash
     */
    protected function getTestInstance()
    {
        return new PaymentMethodCash();
    }

    /**
     * @return string
     */
    protected function getExpectedType()
    {
        return PaymentMethodType::CASH;
    }
}
