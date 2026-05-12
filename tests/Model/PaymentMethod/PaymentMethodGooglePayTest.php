<?php

namespace Tests\YooKassa\Model\PaymentMethod;

use temirovgroup\Model\PaymentMethod\PaymentMethodGooglePay;
use temirovgroup\Model\PaymentMethodType;

class PaymentMethodGooglePayTest extends AbstractPaymentMethodTest
{
    /**
     * @return PaymentMethodGooglePay
     */
    protected function getTestInstance()
    {
        return new PaymentMethodGooglePay();
    }

    /**
     * @return string
     */
    protected function getExpectedType()
    {
        return PaymentMethodType::GOOGLE_PAY;
    }
}
