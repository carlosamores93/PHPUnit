<?php

/**
 * Order
 *
 * An example order class
 */
class Orderr
{

    protected $amount = 0;
    protected $quantity;
    protected $unitPrice;

    public function __construct($quantity, $unitPrice)
    {
        $this->quantity = $quantity;
        $this->unitPrice = $unitPrice;
        $this->amount = $quantity * $unitPrice;
    }

    public function process(PaymentGateway $gateway)
    {
        return $gateway->charge($this->amount);
    }

    public function getAmount()
    {
        return $this->amount;
    }
}
