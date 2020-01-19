<?php

use PHPUnit\Framework\TestCase;

class ColaTest extends TestCase
{

    protected $cola;

    protected function setUp(): void
    {
        $this->cola = new Queue();
    }

    protected function tearDown(): void
    {
        unset($this->cola);
    }
    

    public function testColaVacia()
    {
        $this->assertEquals(0, $this->cola->getCount());
    }

    public function testAgregarElementoALaCola()
    {
        $this->cola->push('klk');
        $this->assertEquals(1, $this->cola->getCount());
    }

    public function testEliminarElementoDeLaCola()
    {
        $this->cola->push('klk');
        $this->cola->pop();
        $this->assertEquals(0, $this->cola->getCount());
        $this->cola->push('Carlos');
        $this->cola->push('Amores');
        $amores = $this->cola->pop();
        $this->assertEquals('Carlos', $amores);
    }

    public function testMaxNumberOfItemsCanBeAdded()
    {
        for ($i=0; $i < Queue::MAX_ITEMS; $i++) { 
            $this->cola->push($i);
        }
        $this->assertEquals(Queue::MAX_ITEMS, $this->cola->getCount());
    }

    public function testExceptionThrowMaxNumberOfItemsCanBeAdded()
    {
        for ($i = 0; $i < Queue::MAX_ITEMS; $i++) {
            $this->cola->push($i);
        }
        $this->expectException(QueueException::class);
        $this->expectExceptionMessage('Queue is full');
        $this->cola->push('Esto va a producir una excepción');

    }
}