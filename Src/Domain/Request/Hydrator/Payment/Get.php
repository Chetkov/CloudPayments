<?php

namespace CloudPayments\Domain\Request\Hydrator\Payment;

use CloudPayments\Domain\Request\Payment\Get as Request;

/**
 * Class Get
 * @package CloudPayments\Domain\Request\Hydrator\Payment
 */
class Get
{
    /**
     * @param Request $request
     *
     * @return array
     */
    public static function extract(Request $request): array
    {
        return [
            'TransactionId' => $request->getTransactionId(),
        ];
    }
}
