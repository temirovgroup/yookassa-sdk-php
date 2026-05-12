<?php

namespace Tests\YooKassa\Model\PaymentMethod;

use temirovgroup\Model\PaymentMethod\PaymentMethodQiwi;
use temirovgroup\Model\PaymentMethodType;

class PaymentMethodQiwiTest extends AbstractPaymentMethodTest
{
    /**
     * @return PaymentMethodQiwi
     */
    protected function getTestInstance()
    {
        return new PaymentMethodQiwi();
    }

    /**
     * @return string
     */
    protected function getExpectedType()
    {
        return PaymentMethodType::QIWI;
    }
}
