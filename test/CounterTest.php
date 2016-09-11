<?php

use EnriqueSegura\Counter;

class CounterTest extends PHPUnit_Framework_TestCase
{
    public function testMock()
    {
        $this->assertInstanceOf('\EnriqueSegura\Counter', new Counter);
    }
}
