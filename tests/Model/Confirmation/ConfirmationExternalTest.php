<?php

namespace Tests\YooKassa\Model\Confirmation;

use temirovgroup\Model\Confirmation\ConfirmationExternal;
use temirovgroup\Model\ConfirmationType;


class ConfirmationExternalTest extends AbstractConfirmationTest
{
    /**
     * @return ConfirmationExternal
     */
    protected function getTestInstance()
    {
        return new ConfirmationExternal();
    }

    /**
     * @return string
     */
    protected function getExpectedType()
    {
        return ConfirmationType::EXTERNAL;
    }
}
