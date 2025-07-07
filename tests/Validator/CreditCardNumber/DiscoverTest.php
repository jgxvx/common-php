<?php

namespace Jgxvx\Common\Validator\CreditCardNumber;

class DiscoverTest extends AbstractCreditCardNumberValidatorTestCase
{
    protected function setUp()
    {
        parent::setUp();
        $this->validator = new Discover();
    }

    protected function tearDown()
    {
        $this->validator = null;
        parent::tearDown();
    }

    protected function getValidNumbers() : array
    {
        return $this->getDiscoverNumbers();
    }

    protected function getInvalidNumbers() : array
    {
        return array_merge(
            [
                '06011111111111117', // prefix digit
                '60111111111111170', // suffix digit
            ],
            $this->getAmericanExpressNumbers(),
            $this->getAustralianBankCardNumbers(),
            $this->getDinersClubNumbers(),
            $this->getJcbNumbers(),
            $this->getMasterCardNumbers(),
            $this->getVisaNumbers()
        );
    }
}
