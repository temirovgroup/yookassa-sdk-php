<?php


namespace Tests\YooKassa\Model\PaymentData;


use temirovgroup\Model\PaymentData\AbstractPaymentData;
use temirovgroup\Model\PaymentData\PaymentDataTinkoffBank;
use temirovgroup\Model\PaymentMethodType;

class PaymentDataTinkoffBankTest extends AbstractPaymentDataTest
{

    /**
     * @return AbstractPaymentData
     */
    protected function getTestInstance()
    {
        return new PaymentDataTinkoffBank();
    }

    /**
     * @return string
     */
    protected function getExpectedType()
    {
        return PaymentMethodType::TINKOFF_BANK;

    }
}
