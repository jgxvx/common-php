<?php

namespace Jgxvx\Common\Validator\CreditCardNumber;

class DinersClubTest extends AbstractCreditCardNumberValidatorTestCase
{
    protected function setUp()
    {
        parent::setUp();
        $this->validator = new DinersClub();
    }

    protected function tearDown()
    {
        $this->validator = null;
        parent::tearDown();
    }

    protected function getValidNumbers() : array
    {
        return $this->getDinersClubNumbers();
    }

    protected function getInvalidNumbers() : array
    {
        return array_merge(
            $this->getAmericanExpressNumbers(),
            $this->getAustralianBankCardNumbers(),
            $this->getDiscoverNumbers(),
            $this->getJcbNumbers(),
            $this->getMasterCardNumbers(),
            $this->getVisaNumbers()
        );
    }


}
