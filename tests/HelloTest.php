<?php

class HelloTest extends PHPUnit_Framework_TestCase
{
    public function testOne()
    {
        $stack = [1];
        $this->assertEquals(1, count($stack));
    } 
}
