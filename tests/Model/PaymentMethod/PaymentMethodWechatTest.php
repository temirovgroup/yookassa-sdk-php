<?php

namespace Tests\YooKassa\Model\PaymentMethod;

use temirovgroup\Model\PaymentMethod\PaymentMethodWechat;
use temirovgroup\Model\PaymentMethodType;

class PaymentMethodWechatTest extends AbstractPaymentMethodTest
{
    /**
     * @return PaymentMethodWechat
     */
    protected function getTestInstance()
    {
        return new PaymentMethodWechat();
    }

    /**
     * @return string
     */
    protected function getExpectedType()
    {
        return PaymentMethodType::WECHAT;
    }
}
