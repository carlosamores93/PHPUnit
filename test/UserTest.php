<?php

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testReturnFullName()
    {
        require 'User.php';
        $user = new User;
        $user->firstName = "Carlos";
        $user->surname = "Amores";
        
        $this->assertEquals('Carlos Amores', $user->getFullName());
    }

    public function testReturnFullNameIsEmptyByDefault()
    {
        $user = new User;
        $this->assertEquals(' ', $user->getFullName());
    }

    public function testReturnFullNameFail()
    {
        $user = new User;
        $user->firstName = "Carlos";
        $user->surname = "Amores";

        $this->assertNotEquals('Carlos Amores Martinez', $user->getFullName());
    }

    public function testFirstName()
    {
        $user = new User;
        $user->firstName = "Carlos";
        $user->surname = "Amores";

        $this->assertEquals('Carlos', $user->firstName);
    }

    public function testSurname()
    {
        $user = new User;
        $user->firstName = "Carlos";
        $user->surname = "Amores";

        $this->assertEquals('Amores', $user->surname);
    }
}