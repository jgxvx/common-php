<?php

namespace Jgxvx\Common\Validator\CreditCardNumber;

class AmericanExpressTest extends AbstractCreditCardNumberValidatorTestCase
{

    protected function setUp()
    {
        parent::setUp();
        $this->validator = new AmericanExpress();
    }

    protected function tearDown()
    {
        $this->validator = null;
        parent::tearDown();
    }

    protected function getValidNumbers() : array
    {
        return $this->getAmericanExpressNumbers();
    }

    protected function getInvalidNumbers() : array
    {
        return array_merge(
            $this->getAustralianBankCardNumbers(),
            $this->getDinersClubNumbers(),
            $this->getDiscoverNumbers(),
            $this->getJcbNumbers(),
            $this->getMasterCardNumbers(),
            $this->getVisaNumbers()
        );
    }
}
