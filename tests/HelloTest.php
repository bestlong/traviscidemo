<?php

class HelloTest extends PHPUnit_Framework_TestCase
{
    public function testOne()
    {
        $stack = [];
        $this->assertEquals(0, count($stack));
    } 
}
