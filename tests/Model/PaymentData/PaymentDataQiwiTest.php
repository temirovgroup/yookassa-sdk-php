<?php

namespace Tests\YooKassa\Model\PaymentData;

use temirovgroup\Model\PaymentData\PaymentDataQiwi;
use temirovgroup\Model\PaymentMethodType;

class PaymentDataQiwiTest extends AbstractPaymentDataPhoneTest
{
    /**
     * @return PaymentDataQiwi
     */
    protected function getTestInstance()
    {
        return new PaymentDataQiwi();
    }

    /**
     * @return string
     */
    protected function getExpectedType()
    {
        return PaymentMethodType::QIWI;
    }
}
