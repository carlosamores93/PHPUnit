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
    }
}