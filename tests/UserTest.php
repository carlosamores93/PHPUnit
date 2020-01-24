<?php

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testReturnFullName()
    {
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

    public function testNotify()
    {
        $user = new User();
        $user->email = "a@a.es";

        $this->assertTrue($user->notify('Hello'));
    }

    public function testNotificationSent()
    {
        $user = new User();

        $mockMailer = $this->createMock(Mailer::class);
        $mockMailer->expects($this->once())->method('sendMessage')->willReturn(true);
        $user->setMailer($mockMailer);
        $user->email = "a@a.es";

        $this->assertTrue($user->notifyMailer('Hello'));
    }

    public function testNotificationSentMore()
    {
        $user = new User();

        $mockMailer = $this->createMock(Mailer::class);
        $mockMailer->expects($this->once())
            ->method('sendMessage')
            ->with('a@a.es', 'Hello')
            ->willReturn(true);
        $user->setMailer($mockMailer);
        $user->email = "a@a.es";

        $this->assertTrue($user->notifyMailer('Hello'));
    }

    public function testCannotNotifyUserWithNoEmail()
    {
        $user = new User();

        $mockMailer = $this->getMockBuilder(Mailer::class)
                            ->setMethods(null)
                            ->getMock();

        $user->setMailer($mockMailer);

        $this->expectException(Exception::class);

        $user->notifyMailer('Hello');
    }
}