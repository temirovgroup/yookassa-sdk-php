<?php

namespace Tests\YooKassa\Model\PaymentMethod;

use temirovgroup\Model\PaymentMethod\PaymentMethodSberbank;
use temirovgroup\Model\PaymentMethodType;

class PaymentMethodSberbankTest extends AbstractPaymentMethodPhoneTest
{
    /**
     * @return PaymentMethodSberbank
     */
    protected function getTestInstance()
    {
        return new PaymentMethodSberbank();
    }

    /**
     * @return string
     */
    protected function getExpectedType()
    {
        return PaymentMethodType::SBERBANK;
    }
}
