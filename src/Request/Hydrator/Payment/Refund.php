<?php

namespace Chetkov\CloudPayments\Request\Hydrator\Payment;

use Chetkov\CloudPayments\Request\Payment\Refund as Request;

/**
 * Class Refund
 * @package Chetkov\CloudPayments\Request\Hydrator\Payment
 */
class Refund
{
    /**
     * @param Request $request
     *
     * @return array
     */
    public static function extract(Request $request): array
    {
        $result = [
            'TransactionId' => $request->getTransactionId(),
            'Amount' => $request->getAmount(),
        ];

        if ($request->getJsonData()) {
            $result['JsonData'] = json_encode($request->getJsonData());
        }

        return $result;
    }
}
