<?php

namespace Tests\YooKassa\Model\PaymentMethod;

use temirovgroup\Model\PaymentMethod\PaymentMethodSbp;
use temirovgroup\Model\PaymentMethodType;

class PaymentMethodSbpTest extends AbstractPaymentMethodTest
{
    /**
     * @return PaymentMethodSbp
     */
    protected function getTestInstance()
    {
        return new PaymentMethodSbp();
    }

    /**
     * @return string
     */
    protected function getExpectedType()
    {
        return PaymentMethodType::SBP;
    }
}
