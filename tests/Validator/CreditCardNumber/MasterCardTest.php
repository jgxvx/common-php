<?php

namespace Jgxvx\Common\Validator\CreditCardNumber;

class MasterCardTest extends AbstractCreditCardNumberValidatorTestCase
{

    protected function setUp()
    {
        parent::setUp();
        $this->validator = new MasterCard();
    }

    protected function tearDown()
    {
        $this->validator = null;
        parent::tearDown();
    }

    protected function getValidNumbers() : array
    {
        return $this->getMasterCardNumbers();
    }

    protected function getInvalidNumbers() : array
    {
        return array_merge(
            $this->getAmericanExpressNumbers(),
            $this->getAustralianBankCardNumbers(),
            $this->getDinersClubNumbers(),
            $this->getDiscoverNumbers(),
            $this->getJcbNumbers(),
            $this->getVisaNumbers()
        );
    }
}
