<?php

/**
 * Item
 *
 * An example item class
 */
class Item
{

    /**
     * Undocumented variable
     *
     * @var [type]
     */
    private $test;

    /**
     * Undocumented function
     */
    public function __construct()
    {
        $this->test = 'Atrubite private';
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    protected function getTest()
    {
        return $this->test;
    }

    /**
     * Get the description
     *
     * @return integer A random integer
     */
    public function getDescription()
    {
        return $this->getID() . $this->getToken();
    }

    /**
     * Get a random ID
     *
     * @return integer The ID
     */
    protected function getID()
    {
        return rand();
    }

    /**
     * Get a random token
     *
     * @return string The token
     */
    private function getToken()
    {
        return uniqid();
    }
}
