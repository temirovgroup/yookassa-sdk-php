<?php

namespace Tests\YooKassa\Model\PaymentMethod;

use temirovgroup\Model\PaymentMethod\PaymentMethodInstallments;
use temirovgroup\Model\PaymentMethodType;

class PaymentMethodInstallmentsTest extends AbstractPaymentMethodTest
{
    /**
     * @return PaymentMethodInstallments
     */
    protected function getTestInstance()
    {
        return new PaymentMethodInstallments();
    }

    /**
     * @return string
     */
    protected function getExpectedType()
    {
        return PaymentMethodType::INSTALLMENTS;
    }
}
