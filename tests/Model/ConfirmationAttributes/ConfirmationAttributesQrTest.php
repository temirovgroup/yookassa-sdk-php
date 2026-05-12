<?php

namespace Tests\YooKassa\Model\ConfirmationAttributes;

use temirovgroup\Model\ConfirmationAttributes\ConfirmationAttributesQr;
use temirovgroup\Model\ConfirmationType;

class ConfirmationAttributesQrTest extends AbstractConfirmationAttributesTest
{
    /**
     * @return ConfirmationAttributesQr
     */
    protected function getTestInstance()
    {
        return new ConfirmationAttributesQr();
    }

    /**
     * @return string
     */
    protected function getExpectedType()
    {
        return ConfirmationType::QR;
    }
}
