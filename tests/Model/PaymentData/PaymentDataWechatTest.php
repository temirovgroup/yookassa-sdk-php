<?php

namespace Tests\YooKassa\Model\PaymentData;

use temirovgroup\Model\PaymentData\PaymentDataWechat;
use temirovgroup\Model\PaymentMethodType;

class PaymentDataWechatTest extends AbstractPaymentDataTest
{
    /**
     * @return PaymentDataWechat
     */
    protected function getTestInstance()
    {
        return new PaymentDataWechat();
    }

    /**
     * @return string
     */
    protected function getExpectedType()
    {
        return PaymentMethodType::WECHAT;
    }
}
