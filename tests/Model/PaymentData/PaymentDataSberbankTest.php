<?php

namespace Tests\YooKassa\Model\PaymentData;

use temirovgroup\Model\PaymentData\PaymentDataSberbank;
use temirovgroup\Model\PaymentMethodType;

class PaymentDataSberbankTest extends AbstractPaymentDataPhoneTest
{
    /**
     * @return PaymentDataSberbank
     */
    protected function getTestInstance()
    {
        return new PaymentDataSberbank();
    }

    /**
     * @return string
     */
    protected function getExpectedType()
    {
        return PaymentMethodType::SBERBANK;
    }
}
