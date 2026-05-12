<?php

namespace Tests\YooKassa\Model\PaymentMethod;

use temirovgroup\Helpers\Random;
use temirovgroup\Model\CurrencyCode;
use temirovgroup\Model\MonetaryAmount;
use temirovgroup\Model\PaymentData\B2b\Sberbank\VatData;
use temirovgroup\Model\PaymentData\B2b\Sberbank\VatDataRate;
use temirovgroup\Model\PaymentData\B2b\Sberbank\VatDataType;
use temirovgroup\Model\PaymentMethod\B2b\Sberbank\PayerBankDetails;
use temirovgroup\Model\PaymentMethod\PaymentMethodB2bSberbank;
use PHPUnit\Framework\TestCase;
use temirovgroup\Model\PaymentMethodType;

class PaymentMethodB2bSberbankTest extends TestCase
{
    /**
     * @return PaymentMethodB2bSberbank
     */
    protected function getTestInstance()
    {
        return new PaymentMethodB2bSberbank();
    }

    /**
     * @return string
     */
    protected function getExpectedType()
    {
        return PaymentMethodType::B2B_SBERBANK;
    }

    /**
     * @dataProvider validPaymentPurposeDataProvider
     * @param string $value
     */
    public function testSetGetPaymentPurpose($value)
    {
        $instance = $this->getTestInstance();
        $instance->setPaymentPurpose($value);
        self::assertNotNull($instance->getPaymentPurpose());
        self::assertEquals($value, $instance->getPaymentPurpose());
    }

    /**
     * @dataProvider validVatDataProvider
     * @param string $value
     */
    public function testSetGetValidVatData($value)
    {
        $instance = $this->getTestInstance();
        $instance->setVatData($value);
        self::assertNotNull($instance->getVatData());
        self::assertTrue($instance->getVatData() instanceof VatData);
    }

    /**
     * @dataProvider invalidVatDataProvider
     * @param string $value
     * @expectedException \InvalidArgumentException
     */
    public function testSetGetInvalidVatData($value)
    {
        $instance = $this->getTestInstance();
        $instance->setVatData($value);
    }

    /**
     * @dataProvider validPayerBankDetailsDataProvider
     * @param string $value
     */
    public function testSetGetValidPayerBankDetails($value)
    {
        $instance = $this->getTestInstance();
        $instance->setPayerBankDetails($value);
        self::assertNotNull($instance->getPayerBankDetails());
        self::assertTrue($instance->getPayerBankDetails() instanceof PayerBankDetails);
    }

    /**
     * @dataProvider invalidPayerBankDetailsDataProvider
     * @param string $value
     * @expectedException \InvalidArgumentException
     */
    public function testSetGetInvalidPayerBankDetails($value)
    {
        $instance = $this->getTestInstance();
        $instance->setPayerBankDetails($value);
    }

    public function validPaymentPurposeDataProvider()
    {
        return array(
            array(Random::str(16))
        );
    }

    public function validVatDataProvider()
    {
        return array(
            array(
                array(
                    'type'   => Random::value(VatDataType::getValidValues()),
                    'rate'   => Random::value(VatDataRate::getValidValues()),
                    'amount' => new MonetaryAmount(Random::int(1, 10000), CurrencyCode::EUR),
                )
            ),
            array(
                new VatData(
                    Random::value(VatDataType::getValidValues()),
                    Random::value(VatDataRate::getValidValues()),
                    new MonetaryAmount(Random::int(1, 10000), CurrencyCode::RUB)
                )
            )
        );
    }

    public function invalidVatDataProvider()
    {
        return array(
            array(new \stdClass())
        );
    }

    public function validPayerBankDetailsDataProvider()
    {
        return array(
            array(
                array(
                    'fullName'   => Random::str(1, 256),
                    'shortName'   => Random::str(1, 100),
                    'address' => Random::str(1, 100),
                    'inn' => Random::str(12, 12, '1234567890'),
                    'kpp' => Random::str(12, 12, '1234567890'),
                    'bankName' => Random::str(1, 100),
                    'bankBranch' => Random::str(1, 100),
                    'bankBik' => Random::str(1, 100),
                    'account' => Random::str(1, 100),
                )
            ),
            array(
                new PayerBankDetails()
            )
        );
    }

    public function invalidPayerBankDetailsDataProvider()
    {
        return array(
            array(new \stdClass())
        );
    }
}
