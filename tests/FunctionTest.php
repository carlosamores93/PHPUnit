<?php

use PHPUnit\Framework\TestCase;

/**
 * Undocumented class
 */
class FunctionTest extends TestCase
{
    /**
     * Undocumented function
     *
     * @return void
     */
    public function testAddReturnsTheCorrectSum()
    {
        require 'functions.php';
        $this->assertEquals(4, add(2, 2));
        $this->assertEquals(40, add(28, 12));
        $this->assertEquals(5, add(-9, 14));
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function testAddDoesNotReturnsTheCorrectSum()
    {
        $this->assertNotEquals(4, add(7, 2));
    }
}