<?php

namespace Chetkov\CloudPayments\Request\Payment;

/**
 * Class Confirm
 * @package Chetkov\CloudPayments\Request\Payment
 */
class Confirm
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
     * Confirm constructor.
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
     * @return Confirm
     */
    public function setJsonData(array $jsonData): self
    {
        $this->jsonData = $jsonData;
        return $this;
    }
}
