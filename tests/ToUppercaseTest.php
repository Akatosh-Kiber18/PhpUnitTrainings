<?php

use PHPUnit\Framework\TestCase;

require_once "../toUppercase.php";

class ToUppercaseTest extends TestCase {

    public function dataProviderArrayOfValues(): array {

        return [
            ['POP', 'pop'],
            ['ABCDEFG', 'abcdefg'],
            ['String is not valid', 123442123],
            ['OLAAAA', 'olaaaa'],
            ['String is not valid', '/.>,sdw}{@'],
        ];
    }

/**
 * @dataProvider dataProviderArrayOfValues
 */

 public function testToUppercase($expected, $value) {
        $this->assertEquals($expected, toUppercase($value));
    }
}