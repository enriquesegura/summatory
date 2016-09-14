<?php

use EnriqueSegura\Summatory;

class SummatoryTest extends \PHPUnit_Framework_TestCase
{
    public function testSummatoryOfEmptyArray()
    {
        $summatory = new Summatory();
        $this->assertEquals(0, $summatory->array_sum([]));
        $this->assertEquals(5, $summatory->array_sum([1, 2, 3, -1, 0]));
        $this->assertEquals(54, $summatory->array_sum([54]));
    }
}