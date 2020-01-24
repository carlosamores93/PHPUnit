<?php

use PHPUnit\Framework\TestCase;

class MockMailerTest extends TestCase
{

    public function testMockMailer()
    {
        $mock = $this->createMock(Mailer::class);
        $mock->method('sendMessage')->willReturn(true);
        $resp = $mock->sendMessage('a@a.es', 'Hello');
        $this->assertTrue($resp);
    }
}
