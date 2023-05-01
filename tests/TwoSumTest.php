<?php

use PHPUnit\Framework\TestCase;

require_once '../twoSum.php';

class TwoSumTest extends TestCase
{
    public function dataProviderTwoSum(): array
    {
        return [
            [1, 1, 2],
            [2, 2, 4],
            [3, 3, 6],
            [4, 4, 8],
            [5, 5, 10],
            [6, 6, 12],
            [7, 7, 14],
            [8, 8, 16],
            [9, 9, 18],
            [10, 10, 20]
        ];
    }
    
    /**
     * @dataProvider dataProviderTwoSum
     */
    public function testTwoSum(int $a, int $b, int $expected): void
    {
        $this->assertEquals($expected, twoSum($a, $b));
    }
    
}