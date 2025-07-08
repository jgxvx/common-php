<?php
declare(strict_types=1);
namespace Jgxvx\Common\Validator\CreditCardNumber;

use PHPUnit\Framework\Attributes\CoversClass;

#[CoversClass(Jcb::class)]
final class JcbTest extends AbstractCreditCardNumberValidatorTestCase
{

    protected function setUp(): void
    {
        parent::setUp();
        $this->validator = new Jcb();
    }

    protected function tearDown(): void
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
