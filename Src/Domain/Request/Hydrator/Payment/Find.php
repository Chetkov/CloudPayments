<?php

namespace CloudPayments\Domain\Request\Hydrator\Payment;

use CloudPayments\Domain\Request\Payment\Find as Request;

/**
 * Class Find
 * @package CloudPayments\Domain\Request\Hydrator\Payment
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
