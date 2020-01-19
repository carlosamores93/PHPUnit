<?php

use PHPUnit\Framework\TestCase;

class QueueColaTest extends TestCase
{

    protected static $queue;

    protected function setUp(): void
    {
        static::$queue->clear();
    }

    public static function setUpBeforeClass(): void
    {
        static::$queue = new Queue();
    }
    
    public static function setUpAfterClass(): void
    {
        static::$queue = null;

    }

    public function testColaVacia()
    {
        $this->assertEquals(0, static::$queue->getCount());
    }

    public function testAgregarElementoALaCola()
    {
        static::$queue->push('klk');
        $this->assertEquals(1, static::$queue->getCount());
    }

    public function testEliminarElementoDeLaCola()
    {
        static::$queue->push('klk');
        static::$queue->pop();
        $this->assertEquals(0, static::$queue->getCount());
        static::$queue->push('Carlos');
        static::$queue->push('Amores');
        $amores = static::$queue->pop();
        $this->assertEquals('Carlos', $amores);
    }
}