<?php

namespace Tests\YooKassa\Model\PaymentMethod;

use temirovgroup\Model\PaymentMethod\PaymentMethodMobileBalance;
use temirovgroup\Model\PaymentMethodType;

class PaymentMethodMobileBalanceTest extends AbstractPaymentMethodPhoneTest
{
    /**
     * @return PaymentMethodMobileBalance
     */
    protected function getTestInstance()
    {
        return new PaymentMethodMobileBalance();
    }

    /**
     * @return string
     */
    protected function getExpectedType()
    {
        return PaymentMethodType::MOBILE_BALANCE;
    }
}
