<?php

use PHPUnit\Framework\TestCase;

class FunctionTest extends TestCase
{
    public function testAddReturnsTheCorrectSum()
    {
        require 'functions.php';
        $this->assertEquals(4, add(2, 2));
        $this->assertEquals(40, add(28, 12));
        $this->assertEquals(5, add(-9, 14));
    }

    public function testAddDoesNotReturnsTheCorrectSum()
    {
        $this->assertNotEquals(4, add(7, 2));
    }
}