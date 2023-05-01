<?php

use PHPUnit\Framework\TestCase;

require_once "../sortArrayOfNumbers.php";

class SortArrayOfNumbersTest extends TestCase {

    public function dataProviderArrayOfNumbers(): array {

        return [
            [[1,2,3,6,8,10],[2,3,6,1,8,10]],
            [[1,1,1,1,1,3,9],[9,1,1,1,1,1,3]]
        ];
    }

/**
 * @dataProvider dataProviderArrayOfNumbers
 */

 public function testSortArrayOfNumbers($expected, $arrayOfNumbers) {
        $this->assertEquals($expected, sortArrayOfNumbers($arrayOfNumbers));
    }
}