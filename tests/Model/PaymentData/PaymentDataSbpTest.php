<?php

namespace Tests\YooKassa\Model\PaymentData;

use temirovgroup\Model\PaymentData\PaymentDataSbp;
use temirovgroup\Model\PaymentMethodType;

class PaymentDataSbpTest extends AbstractPaymentDataTest
{
    /**
     * @return PaymentDataSbp
     */
    protected function getTestInstance()
    {
        return new PaymentDataSbp();
    }

    /**
     * @return string
     */
    protected function getExpectedType()
    {
        return PaymentMethodType::SBP;
    }
}
