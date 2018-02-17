<?php

namespace CloudPayments\Domain\Request\Payment\Card;

/**
 * Class TopUp
 * @package CloudPayments\Domain\Card\Payment\Card
 */
class TopUp
{
    /**
     * @var string
     */
    protected $token;

    /**
     * @var int
     */
    protected $amount;

    /**
     * @var string
     */
    protected $accountId;

    /**
     * @var string
     */
    protected $currency;

    /**
     * TopUp constructor.
     *
     * @param string $token
     * @param int    $amount
     * @param string $accountId
     * @param string $currency
     */
    public function __construct(
        string $token,
        int $amount,
        string $accountId,
        string $currency
    )
    {
        $this->token = $token;
        $this->amount = $amount;
        $this->accountId = $accountId;
        $this->currency = $currency;
    }

    /**
     * @return string
     */
    public function getToken(): string
    {
        return $this->token;
    }

    /**
     * @return int
     */
    public function getAmount(): int
    {
        return $this->amount;
    }

    /**
     * @return string
     */
    public function getAccountId(): string
    {
        return $this->accountId;
    }

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }
}

