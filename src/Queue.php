<?php

/**
 * Queue FIFO
 */
class Queue
{
    /**
     * Queue items
     *
     * @var array
     */
    protected $items = [];

    /**
     * Add an item to the end of the queue
     *
     * @param mixed $item
     */
    public function push($item)
    {
        $this->items[] = $item;
    }

    /**
     * Take a item of the head of the queue
     *
     * @return mixed
     */
    public function pop()
    {
        return array_shift($this->items);
    }

    /**
     * Get a total number of items in the queue
     *
     * @return void
     */
    public function getCount()
    {
        return count($this->items);
    }
}