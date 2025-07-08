<?php
declare(strict_types=1);
namespace Jgxvx\Common\Validator\Hash;

use Jgxvx\Common\Validator\Hash\Sha256 as Validator;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Test;

#[CoversClass(Validator::class)]
final class Sha256Test extends \PHPUnit\Framework\TestCase
{

    #[Test]
    public function validHashes(): void
    {
        $v = new Validator();

        $this->assertTrue($v->isValid('2c26b46b68ffc68ff99b453c1d30413413422d706483bfa0f98a5e886266e7ae'));
        $this->assertTrue($v->isValid('1062769a6a315b57ed0b0f4905ae6ed823b3753902ede4efcd32618ed75880fb'));

        $this->assertTrue($v->isValid('2C26B46B68FFC68FF99B453C1D30413413422D706483BFA0F98A5E886266E7AE'));
        $this->assertTrue($v->isValid('1062769A6A315B57ED0B0F4905AE6ED823B3753902EDE4EFCD32618ED75880FB'));
    }

    #[Test]
    public function invalidHashes(): void
    {
        $v = new Validator();

        $this->assertFalse($v->isValid('2g26b46b68ffc68ff99b453c1d30413413422d706483bfa0f98a5e886266e7ae'));
        $this->assertFalse($v->isValid('_062769A6A315B57ED0B0F4905AE6ED823B3753902EDE4EFCD32618ED75880FB'));
        $this->assertFalse($v->isValid('1062769A6A315B57ED0B0F4905AE6ED823B3753902EDE4EFCD32618ED75880F'));
        $this->assertFalse($v->isValid('g7c85cb27a1de88a0d09c8892d76c0b05a4470ed'));
        $this->assertFalse($v->isValid('_90b9b2f7e3895a5570f7c901d3e5001a4f6cd91'));
        $this->assertFalse($v->isValid('asdflökjf'));
        $this->assertFalse($v->isValid('123'));
        $this->assertFalse($v->isValid(''));
    }
}
