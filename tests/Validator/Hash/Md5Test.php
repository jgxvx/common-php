<?php
declare(strict_types=1);
namespace Jgxvx\Common\Validator\Hash;

use Jgxvx\Common\Validator\Hash\Md5 as Validator;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Test;

#[CoversClass(Validator::class)]
final class Md5Test extends \PHPUnit\Framework\TestCase
{

    #[Test]
    public function validHashes(): void
    {
        $v = new Validator();

        $this->assertTrue($v->isValid('ff04b320c0b7f2b9d7c71b58c6c41648'));
        $this->assertTrue($v->isValid('56b71fa1644cc5728bdbcb249010c267'));
        $this->assertTrue($v->isValid('cc17988a5ded46e7903d6c1ba9c5e1eb'));
        $this->assertTrue($v->isValid('20b2dccb6aff8db0ebdc44cddb48d4ec'));

        $this->assertTrue($v->isValid('FF04B320C0B7F2B9D7C71B58C6C41648'));
        $this->assertTrue($v->isValid('56B71FA1644CC5728BDBCB249010C267'));
        $this->assertTrue($v->isValid('CC17988A5DED46E7903D6C1BA9C5E1EB'));
        $this->assertTrue($v->isValid('20B2DCCB6AFF8DB0EBDC44CDDB48D4EC'));
    }

    #[Test]
    public function invalidHashes(): void
    {
        $v = new Validator();

        $this->assertFalse($v->isValid('gf04b320c0b7f2b9d7c71b58c6c41648'));
        $this->assertFalse($v->isValid('6b71fa1644cc5728bdbcb249010c267'));
        $this->assertFalse($v->isValid('_cc17988a5ded46e7903d6c1ba9c5e1eb'));
        $this->assertFalse($v->isValid('ABCDEF'));
        $this->assertFalse($v->isValid(''));
    }
}
