<?php

namespace Jgxvx\Common\Validator\Hash;

use Jgxvx\Common\Validator\Hash\Sha512 as Validator;

class Sha512Test extends \PHPUnit_Framework_TestCase
{

    /**
     * @test
     */
    public function testValidHashes()
    {
        $v = new Validator();

        $this->assertTrue($v->isValid('f7fbba6e0636f890e56fbbf3283e524c6fa3204ae298382d624741d0dc6638326e282c41be5e4254d8820772c5518a2c5a8c0c7f7eda19594a7eb539453e1ed7'));
        $this->assertTrue($v->isValid('e341caa1c1b422627cbfe7e47ba5ff3eb95b98a5607adb64ad2cc0115fca6af56b167ac63f35f0e86d5c82f1e602dff2a10260e5fd129b5b77d460213ac24ff5'));

        $this->assertTrue($v->isValid('F7FBBA6E0636F890E56FBBF3283E524C6FA3204AE298382D624741D0DC6638326E282C41BE5E4254D8820772C5518A2C5A8C0C7F7EDA19594A7EB539453E1ED7'));
        $this->assertTrue($v->isValid('E341CAA1C1B422627CBFE7E47BA5FF3EB95B98A5607ADB64AD2CC0115FCA6AF56B167AC63F35F0E86D5C82F1E602DFF2A10260E5FD129B5B77D460213AC24FF5'));
    }

    /**
     * @test
     */
    public function testInvalidHashes()
    {
        $v = new Validator();

        $this->assertFalse($v->isValid('g7fbba6e0636f890e56fbbf3283e524c6fa3204ae298382d624741d0dc6638326e282c41be5e4254d8820772c5518a2c5a8c0c7f7eda19594a7eb539453e1ed7'));
        $this->assertFalse($v->isValid('_341caa1c1b422627cbfe7e47ba5ff3eb95b98a5607adb64ad2cc0115fca6af56b167ac63f35f0e86d5c82f1e602dff2a10260e5fd129b5b77d460213ac24ff5'));
        $this->assertFalse($v->isValid('341caa1c1b422627cbfe7e47ba5ff3eb95b98a5607adb64ad2cc0115fca6af56b167ac63f35f0e86d5c82f1e602dff2a10260e5fd129b5b77d460213ac24ff5'));
        $this->assertFalse($v->isValid('2c26b46b68ffc68ff99b453c1d30413413422d706483bfa0f98a5e886266e7ae'));
        $this->assertFalse($v->isValid('1062769a6a315b57ed0b0f4905ae6ed823b3753902ede4efcd32618ed75880fb'));
        $this->assertFalse($v->isValid('2C26B46B68FFC68FF99B453C1D30413413422D706483BFA0F98A5E886266E7AE'));
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
