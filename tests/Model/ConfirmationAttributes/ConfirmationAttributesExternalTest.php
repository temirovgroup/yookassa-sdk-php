<?php

namespace Tests\YooKassa\Model\ConfirmationAttributes;

use temirovgroup\Model\ConfirmationAttributes\ConfirmationAttributesExternal;
use temirovgroup\Model\ConfirmationType;

class ConfirmationAttributesExternalTest extends AbstractConfirmationAttributesTest
{
    /**
     * @return ConfirmationAttributesExternal
     */
    protected function getTestInstance()
    {
        return new ConfirmationAttributesExternal();
    }

    /**
     * @return string
     */
    protected function getExpectedType()
    {
        return ConfirmationType::EXTERNAL;
    }
}
