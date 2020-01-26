<?php

use PHPUnit\Framework\TestCase;

class ItemTest extends TestCase
{
    public function testDescriptionIsNotEmpty()
    {
        $item = new Item();
        
        $this->assertNotEmpty($item->getDescription());                    
    }
    
    public function testIDisAnInteger()
    {
        $item = new ItemChild;
        
        $this->assertIsInt($item->getID());
    }    

    public function testTokenIsAString()
    {
        // This is a private method
        // $item = new ItemChild;
        // $this->assertIsString($item->getToken());     
        
        $item = new Item();
        
        $reflector = new ReflectionClass(Item::class);

        $method = $reflector->getMethod('getToken');
        $method->setAccessible(true);

        $result = $method->invoke($item);
        //$arg = $method->invokeArgs($objet, $args);

        $this->assertIsString($result);

    }
    
    public function testAtributePrivate()
    {
        $item = new Item();

        $reflector = new ReflectionClass(Item::class);

        $property = $reflector->getProperty('test');
        $property->setAccessible(true);

        $result = $property->getValue($item);

        $this->assertIsString($result);
    }
}
