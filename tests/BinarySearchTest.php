<?php
require_once '../binary_search.php';
use PHPUnit\Framework\TestCase;

class BinarySearchTest extends TestCase
{
    /**
     * @dataProvider searchProvider
     */
    public function testSearch($a, $b, $expected)
    {
        $this->assertEquals($expected, binary_search($a, $b));
    }

    public function searchProvider() : array
    {
        return [
            [[1,2,3,4,5], 3, 2],
            [[1,2,3,4,5], 5, 4],
            [[1,2,3,4,5], 1, 0],
            [[1,2,3,4,5], 2, 1],
            [[1,2,3,4,5], 4, 3]
        ];
    }
}
