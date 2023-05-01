<?php

use PHPUnit\Framework\TestCase;

require_once "../emailValidation.php";

class EmailValidationTest extends TestCase {

    public function dataProviderEmailValidation(): array
    {
        return [
            ["valid", "test@test.com"],
            ["not valid", "asdasdasd"],
            ["not valid", "asd@asd@.com"],
            ["valid", "sometext@.com"],
            ["not valid", "sometext@.hododoe"],
            ["not valid", "heyheyhey.com@com"],
            ["valid", "darth@vader.com"],
            ["valid", "open@ai.com"],
            ["not valid", "pooooop@23123#$#%.cpo"],
            ["valid", "1234556@mail.com"]
        ];
    }
    
    /**
     * @dataProvider dataProviderEmailValidation
     */
    public function testEmailValidation($expected, $emailAdress) {
        $this->assertEquals($expected, emailValidation($emailAdress));
    }
}