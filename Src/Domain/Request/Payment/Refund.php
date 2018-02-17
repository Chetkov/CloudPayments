<?php

namespace CloudPayments\Domain\Request\Payment;

/**
 * Class Refund
 * @package CloudPayments\Domain\Request\Payment
 */
class Refund
{
    /**
     * @var int
     */
    protected $transactionId;

    /**
     * @var int
     */
    protected $amount;

    /**
     * @var array|null
     */
    protected $jsonData;

    /**
     * Refund constructor.
     *
     * @param int $transactionId
     * @param int $amount
     */
    public function __construct(int $transactionId, int $amount)
    {
        $this->transactionId = $transactionId;
        $this->amount = $amount;
    }

    /**
     * @return int
     */
    public function getTransactionId(): int
    {
        return $this->transactionId;
    }

    /**
     * @return int
     */
    public function getAmount(): int
    {
        return $this->amount;
    }

    /**
     * @return array|null
     */
    public function getJsonData(): ?array
    {
        return $this->jsonData;
    }

    /**
     * @param array $jsonData
     *
     * @return Refund
     */
    public function setJsonData(array $jsonData): self
    {
        $this->jsonData = $jsonData;
        return $this;
    }
}
