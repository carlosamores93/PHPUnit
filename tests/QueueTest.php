<?php

use PHPUnit\Framework\TestCase;

class QueueTest extends TestCase
{
    public function testNewQueueIsEmpty()
    {
        $queue = new Queue();
        $this->assertEquals(0, $queue->getCount());
    }

    public function testAnItemIsAddedToTheQueue()
    {
        $queue = new Queue();
        $queue->push('klk');
        $this->assertEquals(1, $queue->getCount());
    }

    public function testAnItemIsRemoveToTheQueue()
    {
        $queue = new Queue();
        $queue->push('klk');
        $queue->pop();
        $this->assertEquals(0, $queue->getCount());
    }

    public function testNewQueueIsEmptyIndep()
    {
        $queue = new Queue();
        $this->assertEquals(0, $queue->getCount());
        return $queue;
    }

    /**
     * @depends testNewQueueIsEmptyIndep
     */
    public function testAnItemIsAddedToTheQueueIndep(Queue $queue)
    {
        $queue->push('klk');
        $this->assertEquals(1, $queue->getCount());
    }

    /**
     * @depends testNewQueueIsEmptyIndep
     */
    public function testAnItemIsRemoveToTheQueueIndep(Queue $queue)
    {
        $queue->push('klk');
        $queue->pop();
        $this->assertEquals(1, $queue->getCount());
    }
}