<?php


use PHPUnit\Framework\TestCase;

class ValidatePasswordTest extends TestCase
{
    public function testValidatePasswordLength()
    {
        $passLength =  new ValidatePassword();

        $this->assertFalse($passLength->validLength("1234"));
    }
}
