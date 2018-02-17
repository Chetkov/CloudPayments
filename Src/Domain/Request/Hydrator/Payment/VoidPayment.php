<?php

namespace CloudPayments\Domain\Request\Hydrator\Payment;

use CloudPayments\Domain\Request\Payment\VoidPayment as Request;

/**
 * Class VoidPayment
 * @package CloudPayments\Domain\Request\Hydrator\Payment
 */
class VoidPayment
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
