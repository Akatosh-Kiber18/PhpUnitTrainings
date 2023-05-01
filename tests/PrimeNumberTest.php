<?php

use PHPUnit\Framework\TestCase;

require_once "../primeNumber.php";

class PrimeNumberTest extends TestCase {

    public function dataProviderArrayOfNumbers(): array {

        return [
            [true, 11],
            [false, 6],
            [false, 32],
            [false, 100],
            [true, 29],
            [true, 111]
        ];
    }

/**
 * @dataProvider dataProviderArrayOfNumbers
 */
    public function testPrimeNumber($expected, $number) {
        $this->assertEquals($expected, primeNumber($number));
    }
}