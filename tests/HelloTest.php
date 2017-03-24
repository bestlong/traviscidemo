<?php

class HelloTest extends PHPUnit_Framework_TestCase
{
    public function testOne()
    {
        $stack = [1];
        $this->assertEquals(0, count($stack));
    } 
}
