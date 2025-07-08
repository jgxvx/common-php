<?php
declare(strict_types=1);
namespace Jgxvx\Common\Validator\CreditCardNumber;

use PHPUnit\Framework\Attributes\CoversClass;

#[CoversClass(Discover::class)]
final class DiscoverTest extends AbstractCreditCardNumberValidatorTestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        $this->validator = new Discover();
    }

    protected function tearDown(): void
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
            $this->getAmericanExpressNumbers(),
            $this->getAustralianBankCardNumbers(),
            $this->getDinersClubNumbers(),
            $this->getJcbNumbers(),
            $this->getMasterCardNumbers(),
            $this->getVisaNumbers()
        );
    }
}
