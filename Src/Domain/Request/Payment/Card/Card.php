<?php

namespace CloudPayments\Domain\Request\Payment\Card;

use CloudPayments\Domain\Request\Payment\Request;

/**
 * Class Card
 * @package CloudPayments\Domain\Request\Payment\Card
 */
class Card extends Request
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $cardCryptogramPacket;

    /**
     * Card constructor.
     *
     * @param int    $amount
     * @param string $currency
     * @param string $ipAddress
     * @param string $name
     * @param string $cardCryptogramPacket
     */
    public function __construct(
        int $amount,
        string $currency,
        string $ipAddress,
        string $name,
        string $cardCryptogramPacket
    )
    {
        $this->amount = $amount;
        $this->currency = $currency;
        $this->ipAddress = $ipAddress;
        $this->name = $name;
        $this->cardCryptogramPacket = $cardCryptogramPacket;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getCardCryptogramPacket(): string
    {
        return $this->cardCryptogramPacket;
    }
}