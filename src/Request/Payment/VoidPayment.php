<?php

namespace Chetkov\CloudPayments\Request\Payment;

/**
 * Class VoidPayment
 * @package Chetkov\CloudPayments\Request\Payment
 */
class VoidPayment
{
    /**
     * @var int
     */
    protected $transactionId;

    /**
     * VoidPayment constructor.
     *
     * @param int $transactionId
     */
    public function __construct(int $transactionId)
    {
        $this->transactionId = $transactionId;
    }

    /**
     * @return int
     */
    public function getTransactionId(): int
    {
        return $this->transactionId;
    }
}
