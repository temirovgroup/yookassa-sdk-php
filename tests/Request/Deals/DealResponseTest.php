<?php

namespace Tests\YooKassa\Request\Deals;

use temirovgroup\Request\Deals\DealResponse;

class DealResponseTest extends AbstractDealResponseTest
{
    protected function getTestInstance($options)
    {
        return new DealResponse($options);
    }
}
