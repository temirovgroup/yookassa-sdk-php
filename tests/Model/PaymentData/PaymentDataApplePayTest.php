<?php

namespace Tests\YooKassa\Model\PaymentData;

use temirovgroup\Model\PaymentData\PaymentDataApplePay;
use temirovgroup\Model\PaymentMethodType;

class PaymentDataApplePayTest extends AbstractPaymentDataApplePayTest
{
    /**
     * @return PaymentDataApplePay
     */
    protected function getTestInstance()
    {
        return new PaymentDataApplePay();
    }

    /**
     * @return string
     */
    protected function getExpectedType()
    {
        return PaymentMethodType::APPLE_PAY;
    }
}
