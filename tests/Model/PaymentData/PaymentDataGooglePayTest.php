<?php

namespace Tests\YooKassa\Model\PaymentData;

use temirovgroup\Model\PaymentData\PaymentDataGooglePay;
use temirovgroup\Model\PaymentMethodType;

class PaymentDataGooglePayTest extends AbstractPaymentDataGooglePayTest
{
    /**
     * @return PaymentDataGooglePay
     */
    protected function getTestInstance()
    {
        return new PaymentDataGooglePay();
    }

    /**
     * @return string
     */
    protected function getExpectedType()
    {
        return PaymentMethodType::GOOGLE_PAY;
    }
}
