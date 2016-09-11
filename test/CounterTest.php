<?php

use EnriqueSegura\Counter;

class CounterTest extends PHPUnit_Framework_TestCase
{
    public function testOutputIsEmptyWhenNoNumbersAdded()
    {
        $counter = new Counter();
        $this->assertEmpty($counter->getCounter());
    }
}
