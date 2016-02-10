<?php

namespace Jgxvx\Common\Validator\Hash;

use Jgxvx\Common\Validator\Hash\Sha1 as Validator;

class Sha1Test extends \PHPUnit_Framework_TestCase
{

    /**
     * @test
     */
    public function validHashes()
    {
        $v = new Validator();

        $this->assertTrue($v->isValid('787e65fc7a9bb08fbc1e6b7b31b26abef4165df0'));
        $this->assertTrue($v->isValid('d7c85cb27a1de88a0d09c8892d76c0b05a4470ed'));
        $this->assertTrue($v->isValid('190b9b2f7e3895a5570f7c901d3e5001a4f6cd91'));
        $this->assertTrue($v->isValid('09b7764ffe6ce91e3aa184e4ac0e1914725838a8'));
        $this->assertTrue($v->isValid('cc17988a5ded46e7903d6c1ba9c5e1eb9862729e'));
        $this->assertTrue($v->isValid('56b71fa1644cc5728bdbcb249010c26799963e93'));
        $this->assertTrue($v->isValid('d31ee90aac8427b1c1fe083d88ed3ada541c0543'));
        $this->assertTrue($v->isValid('021b80f5c4f4eb718d6520223c75f25f062fb3b4'));
        $this->assertTrue($v->isValid('5f65036b761384f2f6955f55ab01f5ab8af1ae85'));

        $this->assertTrue($v->isValid('787E65FC7A9BB08FBC1E6B7B31B26ABEF4165DF0'));
        $this->assertTrue($v->isValid('D7C85CB27A1DE88A0D09C8892D76C0B05A4470ED'));
        $this->assertTrue($v->isValid('190B9B2F7E3895A5570F7C901D3E5001A4F6CD91'));
        $this->assertTrue($v->isValid('09B7764FFE6CE91E3AA184E4AC0E1914725838A8'));
        $this->assertTrue($v->isValid('CC17988A5DED46E7903D6C1BA9C5E1EB9862729E'));
        $this->assertTrue($v->isValid('56B71FA1644CC5728BDBCB249010C26799963E93'));
        $this->assertTrue($v->isValid('D31EE90AAC8427B1C1FE083D88ED3ADA541C0543'));
        $this->assertTrue($v->isValid('021B80F5C4F4EB718D6520223C75F25F062FB3B4'));
        $this->assertTrue($v->isValid('5F65036B761384F2F6955F55AB01F5AB8AF1AE85'));
    }

    /**
     * @test
     */
    public function invalidHashes()
    {
        $v = new Validator();

        $this->assertFalse($v->isValid('87e65fc7a9bb08fbc1e6b7b31b26abef4165df0'));
        $this->assertFalse($v->isValid('g7c85cb27a1de88a0d09c8892d76c0b05a4470ed'));
        $this->assertFalse($v->isValid('_90b9b2f7e3895a5570f7c901d3e5001a4f6cd91'));
        $this->assertFalse($v->isValid('asdflökjf'));
        $this->assertFalse($v->isValid('123'));
        $this->assertFalse($v->isValid(''));
    }
}
