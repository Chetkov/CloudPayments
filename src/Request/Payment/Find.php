<?php

namespace Chetkov\CloudPayments\Request\Payment;

/**
 * Class Find
 * @package Chetkov\CloudPayments\Request\Payment
 */
class Find
{
    /**
     * @var string
     */
    protected $invoiceId;

    /**
     * Find constructor.
     *
     * @param string $invoiceId
     */
    public function __construct(string $invoiceId)
    {
        $this->invoiceId = $invoiceId;
    }

    /**
     * @return string
     */
    public function getInvoiceId(): string
    {
        return $this->invoiceId;
    }
}
