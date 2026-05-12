<?php

namespace Model\ConfirmationAttributes;


use Tests\YooKassa\Model\ConfirmationAttributes\AbstractConfirmationAttributesTest;
use temirovgroup\Model\ConfirmationAttributes\AbstractConfirmationAttributes;
use temirovgroup\Model\ConfirmationAttributes\ConfirmationAttributesEmbedded;
use temirovgroup\Model\ConfirmationType;

class ConfirmationAttributesEmbeddedTest extends AbstractConfirmationAttributesTest
{

    /**
     * @return AbstractConfirmationAttributes
     */
    protected function getTestInstance()
    {
        return new ConfirmationAttributesEmbedded();
    }

    /**
     * @return string
     */
    protected function getExpectedType()
    {
        return ConfirmationType::EMBEDDED;
    }
}
