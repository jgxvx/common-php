<?php
declare(strict_types=1);
namespace Jgxvx\Common\Validator\CreditCardNumber;

use PHPUnit\Framework\Attributes\CoversClass;

#[CoversClass(AmericanExpress::class)]
final class AmericanExpressTest extends AbstractCreditCardNumberValidatorTestCase
{

    protected function setUp(): void
    {
        parent::setUp();
        $this->validator = new AmericanExpress();
    }

    protected function tearDown(): void
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
