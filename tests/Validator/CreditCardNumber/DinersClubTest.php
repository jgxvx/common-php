<?php
declare(strict_types=1);
namespace Jgxvx\Common\Validator\CreditCardNumber;

use PHPUnit\Framework\Attributes\CoversClass;

#[CoversClass(DinersClub::class)]
final class DinersClubTest extends AbstractCreditCardNumberValidatorTestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        $this->validator = new DinersClub();
    }

    protected function tearDown(): void
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
