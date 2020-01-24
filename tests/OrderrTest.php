<?php

use PHPUnit\Framework\TestCase;

class OrderrTest extends TestCase
{

    public function tearDown(): void
    {
        Mockery::close();
    }

    public function testOrderIsProcessedUsingMockery()
    {

        $orderr = new Orderr(5, 3);

        $this->assertEquals(15, $orderr->getAmount());

        $gateway = Mockery::mock('PaymentGateway');

        $gateway->shouldReceive('charge')
            ->once()
            ->with(15);

        $orderr->process($gateway);
    }

    public function testOrderIsProcessedUsingASpy()
    {

        $orderr = new Orderr(5, 3);

        $this->assertEquals(15, $orderr->getAmount());

        $gatewaySpy = Mockery::spy('PaymentGateway');

        $orderr->process($gatewaySpy);

        $gatewaySpy->shouldHaveReceived('charge')
                    ->once()
                    ->with(15);

    }
}
