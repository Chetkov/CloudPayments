<?php

namespace Chetkov\CloudPayments\Request\Hydrator\Payment;

use Chetkov\CloudPayments\Request\Payment\Find as Request;

/**
 * Class Find
 * @package Chetkov\CloudPayments\Request\Hydrator\Payment
 */
class Find
{
    /**
     * @param Request $request
     *
     * @return array
     */
    public static function extract(Request $request): array
    {
        return [
            'InvoiceId' => $request->getInvoiceId(),
        ];
    }
}
