<?php

namespace Tests\YooKassa\Request\Payments;

use temirovgroup\Request\Payments\CreatePaymentResponse;

class CreatePaymentResponseTest extends AbstractPaymentResponseTest
{
    protected function getTestInstance($options)
    {
        return new CreatePaymentResponse($options);
    }
}
