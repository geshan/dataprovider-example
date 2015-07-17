<?php

namespace DataProvider\Example;

/**
 * A simple test checkout class for the data provider example
 *
 */
class Checkout
{
    protected $total=0.0;
    protected $cashOnDeliveryFee = 0.0;
    protected $subTotal=0.0;

    protected $paymentMethod;

    /**
     * Calculates total, if payment method is cash 5.00 is added as
     * post payment fees.
     * 
     * @param string $paymentMethod
     */
    public function calculateTotal($paymentMethod)
    {
        $this->subTotal = 95.00;
        if ($paymentMethod == 'Cash') {
            $this->cashOnDeliveryFee = 5.00;
        }
        
        $this->total = $this->subTotal + $this->cashOnDeliveryFee;
    }

    /**
     * 
     * @return double
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * 
     * @param float double
     */
    public function setTotal($total)
    {
        $this->total = $total;
    }
}
