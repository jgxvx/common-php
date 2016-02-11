<?php

namespace Jgxvx\Common\Validator\CreditCardNumber;

class JcbTest extends AbstractCreditCardNumberValidatorTestCase
{

    protected function setUp()
    {
        parent::setUp();
        $this->validator = new Jcb();
    }

    protected function tearDown()
    {
        $this->validator = null;
        parent::tearDown();
    }

    protected function getValidNumbers() : array
    {
        return $this->getJcbNumbers();
    }

    protected function getInvalidNumbers() : array
    {
        return array_merge(
            $this->getAmericanExpressNumbers(),
            $this->getAustralianBankCardNumbers(),
            $this->getDinersClubNumbers(),
            $this->getDiscoverNumbers(),
            $this->getMasterCardNumbers(),
            $this->getVisaNumbers()
        );
    }
}
