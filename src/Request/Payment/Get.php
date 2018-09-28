<?php

namespace Chetkov\CloudPayments\Request\Payment;

/**
 * Class Get
 * @package Chetkov\CloudPayments\Request\Payment
 */
class Get
{
    /**
     * @var int
     */
    protected $transactionId;

    /**
     * Get constructor.
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
