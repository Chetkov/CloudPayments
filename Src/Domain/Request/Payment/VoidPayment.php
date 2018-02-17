<?php

namespace CloudPayments\Domain\Request\Payment;

/**
 * Class VoidPayment
 * @package CloudPayments\Domain\Request\Payment
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
