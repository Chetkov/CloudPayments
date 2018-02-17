<?php

namespace CloudPayments\Domain\Request\Payment;

/**
 * Class Get
 * @package CloudPayments\Domain\Request\Payment
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
