<?php

use PHPUnit\Framework\TestCase;

class Mailer2Test extends TestCase
{
    public function testSendMessageReturnsTrue()
    {
        $this->assertTrue(Mailer2::send('a@a.es', 'A'));
    }

    public function testExceptionIfEmailIsEmpty()
    {
        $this->expectException(Exception::class);
        Mailer2::send('', 'A');
    }
}