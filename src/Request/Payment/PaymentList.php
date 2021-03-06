<?php

namespace Chetkov\CloudPayments\Request\Payment;

/**
 * Class PaymentList
 * @package Chetkov\CloudPayments\Request\Payment
 */
class PaymentList
{
    /**
     * @var \DateTime
     */
    protected $date;

    /**
     * @var string|null
     */
    protected $timeZone;

    /**
     * PaymentList constructor.
     *
     * @param \DateTime $date
     */
    public function __construct(\DateTime $date)
    {
        $this->date = $date;
    }

    /**
     * @return \DateTime
     */
    public function getDate(): \DateTime
    {
        return $this->date;
    }

    /**
     * @return null|string
     */
    public function getTimeZone(): ?string
    {
        return $this->timeZone;
    }

    /**
     * @param string $timeZone
     *
     * @return PaymentList
     */
    public function setTimeZone(string $timeZone): self
    {
        $this->timeZone = $timeZone;
        return $this;
    }
}
