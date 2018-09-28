<?php

namespace Chetkov\CloudPayments\Request\Hydrator\Payment;

use Chetkov\CloudPayments\Request\Payment\Get as Request;

/**
 * Class Get
 * @package Chetkov\CloudPayments\Request\Hydrator\Payment
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
