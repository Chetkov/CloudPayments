<?php

namespace Chetkov\CloudPayments\Request\Hydrator\Payment;

use Chetkov\CloudPayments\Request\Payment\VoidPayment as Request;

/**
 * Class VoidPayment
 * @package Chetkov\CloudPayments\Request\Hydrator\Payment
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
