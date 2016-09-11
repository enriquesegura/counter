<?php

use EnriqueSegura\Counter;

class CounterTest extends PHPUnit_Framework_TestCase
{
    public function testOutputIsEmptyWhenNoNumbersAdded()
    {
        $counter = new Counter();
        $this->assertEmpty($counter->getCounter());
    }

    public function testOutputIsNotEmptyWhenThereIsNumber()
    {
        $counter = new Counter();
        $counter->count(1);
        $counter->count(1);
        $counter->count(3);
        $counter->count(2);
        $this->assertEquals(array(1=>2,3=>1,2=>1), $counter->getCounter());
    }
}
