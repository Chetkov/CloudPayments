<?php

namespace CloudPayments\Domain\Request\Payment\Card;

/**
 * Class Post3Ds
 * @package CloudPayments\Domain\Card\Payment\Card
 */
class Post3Ds
{
    /**
     * @var int
     */
    protected $transactionId;

    /**
     * @var string
     */
    protected $paRes;

    /**
     * Post3Ds constructor.
     *
     * @param int    $transactionId
     * @param string $paRes
     */
    public function __construct(int $transactionId, string $paRes)
    {
        $this->transactionId = $transactionId;
        $this->paRes = $paRes;
    }

    /**
     * @return int
     */
    public function getTransactionId(): int
    {
        return $this->transactionId;
    }

    /**
     * @return string
     */
    public function getPaRes(): string
    {
        return $this->paRes;
    }
}
