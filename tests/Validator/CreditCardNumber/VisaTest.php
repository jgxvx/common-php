<?php
declare(strict_types=1);
namespace Jgxvx\Common\Validator\CreditCardNumber;

use PHPUnit\Framework\Attributes\CoversClass;

#[CoversClass(Visa::class)]
final class VisaTest extends AbstractCreditCardNumberValidatorTestCase
{

    protected function setUp(): void
    {
        parent::setUp();
        $this->validator = new Visa();
    }

    protected function tearDown(): void
    {
        $this->validator = null;
        parent::tearDown();
    }

    protected function getValidNumbers() : array
    {
        return $this->getVisaNumbers();
    }

    protected function getInvalidNumbers() : array
    {
        return array_merge(
            $this->getAmericanExpressNumbers(),
            $this->getAustralianBankCardNumbers(),
            $this->getDinersClubNumbers(),
            $this->getDiscoverNumbers(),
            $this->getJcbNumbers(),
            $this->getMasterCardNumbers()
        );
    }
}
