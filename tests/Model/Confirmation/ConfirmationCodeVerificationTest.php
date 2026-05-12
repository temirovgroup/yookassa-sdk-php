<?php

namespace Tests\YooKassa\Model\Confirmation;

use temirovgroup\Model\Confirmation\ConfirmationCodeVerification;
use temirovgroup\Model\ConfirmationType;

class ConfirmationCodeVerificationTest extends AbstractConfirmationTest
{
    /**
     * @return ConfirmationCodeVerification
     */
    protected function getTestInstance()
    {
        return new ConfirmationCodeVerification();
    }

    /**
     * @return string
     */
    protected function getExpectedType()
    {
        return ConfirmationType::CODE_VERIFICATION;
    }
}
