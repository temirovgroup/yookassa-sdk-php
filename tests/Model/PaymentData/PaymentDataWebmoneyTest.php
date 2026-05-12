<?php

namespace Tests\YooKassa\Model\PaymentData;

use temirovgroup\Model\PaymentData\PaymentDataWebmoney;
use temirovgroup\Model\PaymentMethodType;

class PaymentDataWebmoneyTest extends AbstractPaymentDataTest
{
    /**
     * @return PaymentDataWebmoney
     */
    protected function getTestInstance()
    {
        return new PaymentDataWebmoney();
    }

    /**
     * @return string
     */
    protected function getExpectedType()
    {
        return PaymentMethodType::WEBMONEY;
    }
}
