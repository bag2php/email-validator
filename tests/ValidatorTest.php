<?php

namespace Bag2\EmailValidator;

use PHPUnit\Framework\TestCase;

class ValidatorTest extends TestCase
{
    private $subject;
    public function setUp(): void
    {
        $this->subject = new Validator;
    }

    /**
     * @dataProvider emailValidator
     */
    public function test($email, $expected): void
    {
        $this->assertSame($expected, $this->subject->validate($email));
    }

    public function emailValidator()
    {
    
         return [
              ['a@b.com', true],
              ['a', false],
         ];
    }
}

