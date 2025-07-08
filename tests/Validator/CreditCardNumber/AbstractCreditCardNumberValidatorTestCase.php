<?php
declare(strict_types=1);
namespace Jgxvx\Common\Validator\CreditCardNumber;

/**
 * Test credit card numbers found on PayPal.
 *
 * @link https://www.paypalobjects.com/en_US/vhelp/paypalmanager_help/credit_card_numbers.htm
 */
abstract class AbstractCreditCardNumberValidatorTestCase extends \PHPUnit\Framework\TestCase
{

    /** @var AbstractValidator */
    protected $validator;

    /**
     * @test
     */
    public function testNumbers()
    {
        foreach ($this->getValidNumbers() as $number) {
            $this->assertTrue($this->validator->isValid($number));
        }

        foreach ($this->getInvalidNumbers() as $number) {
            $this->assertFalse($this->validator->isValid($number));
        }
    }

    abstract protected function getValidNumbers() : array;

    abstract protected function getInvalidNumbers() : array;

    protected function getAmericanExpressNumbers() : array
    {
        return [
            '378282246310005',
            '371449635398431',
            '378734493671000',
            '3782 822463 10005',
            '3714 496353 98431',
            '3787 344936 71000',
        ];
    }

    protected function getAustralianBankCardNumbers() : array
    {
        return [
            '5610591081018250',
            '56105 91081 018250',
        ];
    }

    protected function getDinersClubNumbers() : array
    {
        return [
            '30569309025904',
            '38520000023237',
            '3056 9309 025904',
            '3852 0000 023237',
        ];
    }

    protected function getDiscoverNumbers() : array
    {
        return [
            '6011111111111117',
            '6011000990139424',
            '60111 1111 1111 117',
            '60110 0099 0139 424',
        ];
    }

    protected function getJcbNumbers() : array
    {
        return [
            '3530111333300000',
            '3566002020360505',
            '3530 1113 3330 0000',
            '3566 0020 2036 0505',
        ];
    }

    protected function getMasterCardNumbers() : array
    {
        return [
            '5555555555554444',
            '5105105105105100',
            '5555 5555 555 54444',
            '5105 1051 051 05100',
        ];
    }

    protected function getVisaNumbers() : array
    {
        return [
            '4111111111111111',
            '4012888888881881',
            '4222222222222',
            '4111 1111 1111 1111',
            '4012 8888 8888 1881',
            '4222 2222 22222',
        ];
    }
}
