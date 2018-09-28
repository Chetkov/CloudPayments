<?php

namespace Chetkov\CloudPayments\Request\Payment\Token;

use Chetkov\CloudPayments\Request\Payment\Request;

/**
 * Class Token
 * @package Chetkov\CloudPayments\Reques\Payment\Token
 */
class Token extends Request
{
    /**
     * @var string
     */
    protected $token;

    /**
     * Token constructor.
     *
     * @param int    $amount
     * @param string $currency
     * @param string $accountId
     * @param string $token
     */
    public function __construct(
        int $amount,
        string $currency,
        string $accountId,
        string $token
    )
    {
        $this->amount = $amount;
        $this->currency = $currency;
        $this->accountId = $accountId;
        $this->token = $token;
    }

    /**
     * @return string
     */
    public function getToken(): string
    {
        return $this->token;
    }
}
